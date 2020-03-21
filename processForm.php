<?php

// define variables and set to empty values
$firstname =$lastname = $email = $gender = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = clean_data($_POST["firstname"]);
  $lastname = clean_data($_POST["lastname"]);
  $email = clean_data($_POST["email"]);
  $gender = clean_data($_POST["gender"]);
  $message = clean_data($_POST["message"]);

 

  $int= mt_rand(1262055681,1262055681);
  $generatedFile = $firstname.'_'.$lastname.$int.'.txt'; 
  // file handling
  $myfile = fopen($generatedFile, "w") or die("Unable to open file!");
  $txt = "Your firstname is ".$firstname."\n";
  $txt .= "Your lastname is ".$lastname."\n";
  $txt .= "Your email is ".$email."\n";
  $txt .= "Your gender is ".$gender."\n";
  $txt .= "Your message is ".$message."\n";
  fwrite($myfile, $txt);  
  fclose($myfile);

  echo 'Your contact has been successfully processed';
 
}


// Clean input data
function clean_data($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
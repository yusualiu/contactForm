<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple contact form</title>
</head>
<style>
  /* Style inputs with type="text", select elements and textareas */
input[type=text],input[type=email],select, textarea {
  width: 100%; 
  padding: 12px;  
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical 
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #594caf;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #af9c4c;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<div class="container">
  <form action="processForm.php" method="POST">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email." required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
      <option value="">Choose gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>     
      
    </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write Your message here.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>
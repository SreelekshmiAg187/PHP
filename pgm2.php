<!DOCTYPE html> 
<html> 
<head> 
 <title>Registration Form</title> 
</head> 
<body> 
<h2>Registration Form</h2> 
<?php 
// Initialize variables 
$name = $email = $password = $phone = ""; 
$nameErr = $emailErr = $passErr = $phoneErr = ""; 
// Check if form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 // Validate Name 
 if (empty($_POST["name"])) { 
 $nameErr = "Name is required"; 
 } else { 
 $name = $_POST["name"]; 
 }
 // Validate Email 
 if (empty($_POST["email"])) { 
 $emailErr = "Email is required"; 
 } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  $emailErr = "Invalid email format"; 
 } else { 
 $email = $_POST["email"]; 
 } 
 // Validate Password 
 if (empty($_POST["password"])) { 
 $passErr = "Password is required"; 
 } elseif (strlen($_POST["password"]) < 6) { 
 $passErr = "Password must be at least 6 characters";  } else { 
 $password = $_POST["password"]; 
 } 
 // Validate Phone Number 
 if (empty($_POST["phone"])) { 
 $phoneErr = "Phone number is required"; 
 } elseif (!preg_match("/^[0-9]{10}$/", $_POST["phone"])) {  $phoneErr = "Phone number must be 10 digits";  } else { 
 $phone = $_POST["phone"];
 } 
 // If no errors, show success message 
 if ($nameErr == "" && $emailErr == "" && $passErr == "" && $phoneErr == "") {  echo "<h3 style='color:green;'>Registration Successful!</h3>";  echo "Name: $name <br>"; 
 echo "Email: $email <br>"; 
 echo "Phone: $phone <br>"; 
 } 
} 
?> 
<form method="post" action=""> 
 Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>  <span style="color:red;"><?php echo $nameErr; ?></span><br> 
 Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>  <span style="color:red;"><?php echo $emailErr; ?></span><br> 
 Password: <input type="password" name="password"><br>  <span style="color:red;"><?php echo $passErr; ?></span><br> 
 Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"><br>  <span style="color:red;"><?php echo $phoneErr; ?></span><br> 
 <input type="submit" value="Register">
</form> 
</body> </html>

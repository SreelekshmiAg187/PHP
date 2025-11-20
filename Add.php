<!DOCTYPE html> 
<html> 
<head> 
<title>Insert Page page</title> 
</head> 
<body> 
<center> 
<form name="newform" method="post" action="emp.php"> 
<h2>TO DISPLAY INSERTED DATA:<input type="submit" name="submit" 
value="DISPLAY"></h2> 
</form> 

<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="empdb"; 
$tbname="emp"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);   // fixed

if(!$conn) 
{ 
    die("Connection failed ".mysqli_connect_error());   // fixed bracket
} 
else 
{ 
    echo "<br><h2 align=center>CONNECTION SUCCESSFULL!!</h2><br/>";   // fixed missing space
} 

$id = $_POST['eid']; 
$name = $_POST['ename']; 
$dep = $_POST['dept']; 
$salary = $_POST['sal']; 

// INSERT query corrected
$query = "INSERT INTO emp(eid,ename,dept,sal) 
VALUES('$id','$name','$dep','$salary')";    // fixed quotes

$res = mysqli_query($conn, $query);

if($res) 
{ 
    echo "SUBMITTED SUCCESSFULLY!!"; 
} 
else 
{ 
    echo "ERROR"; 
}

mysqli_close($conn); 
?> 

</center> 
</body> 
</html>

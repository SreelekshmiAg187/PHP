<!DOCTYPE html> 
<html> 
<head> 
<title>Insert Page page</title> 
</head> 
<body> 
<center> 
<form name="newform" method="post" action="insert.php"> 
<h2>TO ADD DATA:<input type="submit" name="submit1" 
value="BACK"></h2> 
</form> 
<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="empdb"; 
$tbname="emp";        // fixed variable name: Stbname → $tbname

$conn = mysqli_connect($servername, $username, $password, $dbname);   // fixed: conn-mysqli → $conn =
if(!$conn) 
{ 
    die("Connection failed ".mysqli_connect_error());  // moved die inside the if
} 
else 
{ 
    echo "<br><h2 align=center>EMPLOYEE DETAILS</h2><br/>"; 
    $sql="SELECT * FROM emp"; 
    $res = mysqli_query($conn,$sql);       // fixed: Sres → $res

    if(mysqli_num_rows($res) > 0) 
    { 
        echo "<table border=2 align=center>";   // fixed: border-2 → border=2
        echo "<tr><th>Employee ID</th>"; 
        echo "<th>Employee Name</th>"; 
        echo "<th>Department</th>"; 
        echo "<th>Salary</th></tr>"; 

        while($row = mysqli_fetch_assoc($res))    // fixed: row-mysqli → $row =
        { 
            echo "<tr><td>".$row['eid']."</td>"; 
            echo "<td>".$row['ename']."</td>"; 
            echo "<td>".$row['dept']."</td>"; 
            echo "<td>".$row['sal']."</td></tr>"; 
        } 
        echo "</table>"; 
    } 
    else 
    { 
        echo "0 results";        // fixed: O redults
    } 
} 

mysqli_close($conn); 
?> 
</center> 
</body> 
</html>

<?php 
echo"sorting array<br/>"; 
echo": 
=<br/>"; 
$stud=array("krishna","sreelekshmi","anagha", "rehana","rizana"); 
echo"displaying array using print_r():"; 
print_r($stud); 
echo"<br>Array in ascending order:<br/>"; 
asort($stud); 
print_r($stud); 
echo"<br>Array in descending order:<br/>"; 
arsort($stud); 
print_r($stud); 
?> 

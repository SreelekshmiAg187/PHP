<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body> 
<h1>Electricity bill</h1> 
<form method="post" action="#"> 
consumerID:<input type="number" name="id"><br> 
name:<input type="text" name="name"><br> 
previous reading:<input type="number" name="prev"><br> 
present reading:<input type="number" name="pres"><br><br> 
<input type="submit"> 
</form> 
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){ 

$id=$_POST["id"]; 
$name=$_POST["name"]; 
$prev=$_POST["prev"]; 
$pres=$_POST["pres"]; 

$units = $pres - $prev;  

echo "................"; 
echo "<h3>Kerala State Electricity Board (KSEB)</h3>"; 
echo "<br><br>"; 
echo "consumer ID: ".$id."<br>"; 
echo "consumer name: ".$name."<br>"; 
echo "units consumed: ".$units."<br>"; 

if($units <= 100){                   
    $amt = $units * 3;               
} 
elseif($units > 100 && $units <= 200){ 
    $amt = $units * 4; }              
elseif($units > 200 && $units <= 300){ 
    $amt = $units * 5; }              
else{ 
    $amt = $units * 6; }              

echo "<h4>Total: Rs. ".$amt."</h4><br>"; 

} 
?> 
</body> 
</html>

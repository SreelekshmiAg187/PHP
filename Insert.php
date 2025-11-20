<html> 
<head> 
<title>Employee form</title> 
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"> 
</head> 
<body> 
<center> 
<form name="empform" method="post" action="add.php"> 
<h2 align="center">EMPLOYEE DETAILS</h2> 
<table border="2" align="center"> 
<tr> 
<td>Name:</td> 
<th><input type="text" name="ename" value=""></th> 
</tr> 

<tr> 
<td>ID:</td> 
<th><input type="number" name="eid" value=""></th> 
</tr> 

<tr> 
<td>Department:</td> 
<td><input type="text" name="dept" value=""></td>
</tr> 

<tr> 
<td>Salary:</td> 
<td><input type="number" name="sal" value=""></td> 
</tr> 

<tr> 
<td colspan="2" align="center">
<input type="submit" name="submit" value="SUBMIT">
</td> 
</tr> 
</table> 
</form> 

<form name="newform" method="post" action="emp.php"> 
<h2>TO DISPLAY INSERTED DATA:
<input type="submit" name="submit" value="DISPLAY">
</h2> 
</form> 

</center> 
</body> 
</html>

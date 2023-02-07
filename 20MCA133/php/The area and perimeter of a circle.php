<html>
<head><title>Practise</title></head> 
<body> 

<form method=post>
Circumference of a Circle or the Area <br>
The Radius of the circle: <input type="text" name="num1"><br>
<input type="submit" value="Submit"></form><hr>

<?php
$num=$_POST["3.14"]*$_POST["num1"];
echo "The Circuference of the circle is $num<br>"; 


?>

<hr>
</body>
</html>
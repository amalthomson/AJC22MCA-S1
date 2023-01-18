<?php
if(isset($_POST["sub"]))
{
$l=$_POST["num1"];
$b=$_POST["num2"];
$temp=$l;
$l=$b;
$b=$temp;
echo"After swapping <br>"."First:".$l."<br> Second:".$b;
}
?>
<form method="POST">
Enter first number:<input type="text" name="num1"><br>
Enter second number:<input type="text" name="num2">
<input type="submit" name="sub">
</form>

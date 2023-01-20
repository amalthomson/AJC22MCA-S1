<?php
if(isset($_POST["sub"]))
{
$c=$_POST["num1"];
$f=(1.8*$c)+32;
echo "Temperature in celsius:".$c."<br>";
echo "Temperature in fahrenheit:".$f;
}
?>
<form method="POST">
Enter temp in celsius:<input type="text" name="num1"><br>
<input type="submit" name="sub">
</form>

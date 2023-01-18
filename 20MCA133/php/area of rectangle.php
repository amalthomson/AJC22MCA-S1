<?php
if(isset($_POST["sub"]))
{
$l=$_POST["num1"];
$b=$_POST["num2"];
$area=$l*$b;
echo "Area of rectangle:".$area."<br>";
$peri=2*($l+$b);
echo "Perimeter of rectangle:".$peri;
}
?>
<form method="POST">
Enter length:<input type="text" name="num1"><br>
Enter breadth:<input type="text" name="num2">
<input type="submit" name="sub">
</form>

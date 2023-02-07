<?php
if(isset($_POST["sub"]))
{
$r=$_POST["num"];
$pi=3.14;
$area=$pi*$r*$r;
echo "Area of circle:".$area."<br>";
$peri=2*$pi*$r;
echo "Perimeter of cicle:".$peri;
}
?>
<form method="POST">
Enter Radius:<input type="text" name="num">
<input type="submit" name="sub">
</form>

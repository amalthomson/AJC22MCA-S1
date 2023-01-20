<?php
if(isset($_POST["sub"]))
{
$a=$_POST["num1"];
$temp=$a;
$i = 1;
$f = 1;
while ($i <= $a)
{
    $f = $f*$i;
    $i = $i+1;
}
echo "Factorial of ".$temp." is ".$f;
}
?>
<form method="POST">
Enter number:<input type="text" name="num1">
<input type="submit" name="sub">
</form>

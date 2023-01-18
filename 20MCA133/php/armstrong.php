<?php
if(isset($_POST["sub"]))
{
$a=$_POST["num1"];
$temp=$a;
$s=0;
while($a>0)
{
    $r = $a % 10;
    $c = $r*$r*$r;
    $s = $s+$c;
    $a = $a/10;
}
if($temp == $s)
    echo $temp." is armstrong";
else
    echo $temp." is not Armstrong";
}
?>
<form method="POST">
Enter number:<input type="text" name="num1">
<input type="submit" name="sub">
</form>

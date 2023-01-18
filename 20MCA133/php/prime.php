<?php
if(isset($_POST["sub"]))
{
$a=$_POST["num1"];
$i = 1;
$p = 0;
while($i <=$a)
{
    if($a %$i == 0)
	{
        $p=$p+1;
        $i= $i+1;
	}
    else
	{
        $i=$i+1;
	}
}
if($p==2)
    echo $a." is a prime number";
else
    echo $a." is not a prime number";
}
?>
<form method="POST">
Enter number:<input type="text" name="num1">
<input type="submit" name="sub">
</form>

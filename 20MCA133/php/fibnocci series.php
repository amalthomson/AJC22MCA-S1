<?php
if(isset($_POST["sub"]))
{
$limit=$_POST["num"];
$n1=0;
$n2=1;
$c=0;
for($i=0;$i<=$limit;$i++)
{
	echo $n1;
	$n1=$n1+$n2;
	$n2=$c;
	$c=$n1;
}
}
?>
<form method="POST">
Limit:<input type="text" name="num">
<input type="submit" name="sub">
</form>

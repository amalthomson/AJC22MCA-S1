<?php
if(isset($_POST["sub"]))
{
$x=$_POST["a"];
$y=$_POST["b"];
$z=$x+$y;
echo $z;
}
?>
<html>
<form action="#" method="POST">
<table>
<tr><td>A</td><td><input type="text" name="a"></td></td></tr> 
<tr><td>B</td><td><input type="text" name="b"></td></td></tr>
<tr><td></td><td><input type="submit" name="sub" value="click"></td></td></tr>
</table>
</form>
</html>
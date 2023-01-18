<?php
$area=0;
$per=0;

if(isset($_POST["xyz"])){	
$a=$_POST["length"];
$b=$_POST["breadth"];

$area=$a*$b;
$per=2*($a+$b);
}

?>

<form action ="#" method="POST">
<table border="3">

<tr>
<td> LENGHT : </td>
<td> <input type="text" name="length"> </td>
</tr>

<tr>
<td> BREADTH : </td>
<td> <input type="text" name="breadth"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="xyz" value="Calculate"> </td>
</tr>

<tr>
<td> AREA : </td>
<td> <input type="text" name="xyz" value="<?php echo $area ?>"> </td>
</tr>

<tr>
<td> PERIMETER : </td>
<td> <input type="text" name="xyz" value="<?php echo $per ?>"> </td>
</tr>


</table>
</form>
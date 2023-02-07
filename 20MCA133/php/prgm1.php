<?php
$area=0;
$cer=0;

if(isset($_POST["xyz"])){
	
$r=$_POST["radius"];

$area=3.14*$r;
$cer=2*3.14*$r;

}

?>

<form action ="#" method="POST">
<table border="3">

<tr>
<td> RADIUS : </td>
<td> <input type="text" name="radius"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="xyz" value="Calculate"> </td>
</tr>



<tr>
<td> AREA : </td>
<td> <input type="text" name="xyz" value="<?php  echo $area  ?>"> </td>
</tr>


<tr>
<td> CERCUMFRENCE : </td>
<td> <input type="text" name="xyz" value="<?php echo $cer ?>"> </td>
</tr>


</table>
</form>
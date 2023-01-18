<?php
$f=0;

if(isset($_POST["xyz"]))
{
$c=$_POST["cel"];

$f=(1.8*$c)+32;
}

?>

<form action ="#" method="POST">
<table>

<tr>
<td> CELCIUS : </td>
<td> <input type="text" name="cel"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="xyz" value="Calculate"> </td>
</tr>

<tr>
<td> FARHENHIET : </td>
<td> <input type="text" name="xyz" value="<?php  echo $f  ?>"> </td>
</tr>


</table>
</form>
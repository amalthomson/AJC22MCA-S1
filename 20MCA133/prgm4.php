<?php

if(isset($_POST["xyz"]))
{
$a=$_POST["v1"];
$b=$_POST["v2"];

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

}
?>
<form action="#"  method="POST">
<table border="3">

<tr>
<td> FIRST NUMBER : </td>
<td> <input type="text" name="v1"> </td>
</tr>

<tr>
<td> SECOND NUMBER : </td>
<td> <input type="text" name="v2"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="xyz" value="SWAP"> </td>
</tr>

<tr>
<td> FIRST NUMBER : </td>
<td> <input type="text" name="xyz" value="<?php echo $a ?>"> </td>
</tr>


<tr>
<td> SECOND NUMBER : </td>
<td> <input type="text" name="xyz" value="<?php echo $b ?>"> </td>
</tr>


</form>
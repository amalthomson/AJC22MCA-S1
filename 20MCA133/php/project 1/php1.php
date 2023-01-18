<?php
include 'conn.php';
if(isset($_POST["sub"]))
{
$a=$_POST["v1"];
$b=$_POST["v2"];
$c=$_POST["v3"];

$sql= "INSERT INTO `table_amal`(`Name`, `Phone Number`, `Address`) VALUES ('$a','$b','$c')";
$result=mysqli_query($conn, $sql);

header("location:view.php");

if($result==1)
	echo "Inserted";
else
	echo "Failed";
}

?>

<form action="#"  method="POST">
<center>
<table border="1">

<tr>
<td> NAME : </td>
<td> <input type="text" name="v1"> </td>
</tr>

<tr>
<td> PHONE NUMBER : </td>
<td> <input type="text" name="v2"> </td>
</tr>


<tr>
<td> ADDRESS : </td>
<td> <textarea name="v3" rows="5" cols="21"> </textarea></td>
</tr>

<tr>
<center>
<td colspan="2"> <input type="submit" name="sub" value="Submit"> </td>
</center>
</tr>

</table>
</center>
<br>
<br>

</form>
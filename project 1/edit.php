
<?php
   include 'conn.php';
   $id = $_GET['eid'];
   $sql = "SELECT * FROM `table_amal` WHERE reg_id = $id ";
   $result = mysqli_query($conn,$sql);
   
   if(isset($_POST['submit']))
{
	$name= $_POST['Name'];
	$address= $_POST['Address'];
	$phoneno= $_POST['Phone Munber'];
    $sql = "UPDATE `table_amal` SET `red_id`='$name',`Address`='$address',`Phone Number`='$phoneno' WHERE uid= $id";
	$result = mysqli_query($conn,$sql);
	if($result==1)
	{
		echo "Updated ";
	}
	else
	{
		echo "not updated ";
	}
	header( "Location: view.php" ); 
}
  
?>

<form action="#"  method="POST">
<?php
while($row = mysqli_fetch_array($result))
  {
	    ?>
<center>
<table border="1">

<tr>
<td> NAME : </td>
<td> <input type="text" name="Name" value="<?php echo $row["Name"]; ?>"> </td>
</tr>

<tr>
<td> PHONE NUMBER : </td>
<td> <input type="text" name="Phone Number" value="<?php echo $row["Phone Number"];  ?>"> </td>
</tr>


<tr>
<td> ADDRESS : </td>
<td> <textarea name="Address" value="<?php echo $row["Address"]; ?>" rows="5" cols="21"> </textarea></td>
</tr>

<tr>
<center>
<td colspan="2"> <input type="submit" name="submit" value="Submit"> </td>
</center>
</tr>

</table>
<?php 
  }

  
  ?>
</center>
<br>
<br>

</form>
<?php
include "connection.php";
?>

<a href="registration.php">REGISTER AGAIN</a>

<table border="1">

<tr>
<td> ID </td>
<td> Name </td>
<td> Phone Number </td>
<td> Email </td>
<td> Gender </td>
<td> Address </td>
<td> Country </td>
<td> Edit </td>
<td> Delete </td>
</tr>

<?php
$result=mysqli_query($connection, "SELECT * FROM `registration`");

while($row=mysqli_fetch_array($result))
{ ?>

<tr>
<td> <?php echo $row["regID"]; ?> </td>
<td> <?php echo $row["Name"]; ?> </td>
<td> <?php echo $row["Phone Number"]; ?> </td>
<td> <?php echo $row["Email"]; ?> </td>
<td> <?php echo $row["Gender"]; ?> </td>
<td> <?php echo $row["Address"]; ?> </td>
<td> <?php echo $row["Country"]; ?> </td>
<td> <a href="edit.php?eid=<?php echo $row["regID"]; ?>">edit</a></td>
<td> <a href="delete.php?did=<?php echo $row["regID"]; ?>">delete</a></td>


</tr>

<?php }

?>



</table>
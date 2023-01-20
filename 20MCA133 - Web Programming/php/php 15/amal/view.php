<?php
include "conn.php";
?>

<a href="php1.php">REGISTER AGAIN</a>

<table border="1">

<tr>
<td> ID </td>
<td> Name </td>
<td> Phone Number </td>
<td> Address </td>
<td> Edit </td>
<td> Delete </td>
</tr>

<?php
$result=mysqli_query($conn, "SELECT * FROM `table_amal`");

while($row=mysqli_fetch_array($result))
{ ?>

<tr>
<td> <?php echo $row["reg_id"]; ?> </td>
<td> <?php echo $row["Name"]; ?> </td>
<td> <?php echo $row["Phone Number"]; ?> </td>
<td> <?php echo $row["Address"]; ?> </td>
<td> <a href="edit.php?eid=<?php echo $row["reg_id"]; ?>">edit</a></td>
<td> <a href="delete.php?did=<?php echo $row["reg_id"]; ?>">delete</a></td>


</tr>

<?php }

?>



</table>
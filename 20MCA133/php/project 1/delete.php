<?php
include "conn.php";

$del=$_GET["did"];

$result=mysqli_query($conn,"DELETE FROM `table_amal` WHERE `reg_id`='$del'");

header("location:view.php");

?>
<?php
include "db2.php";

$del=$_GET["did"];

$result=mysqli_query($con,"DELETE FROM `users` WHERE `role_id`='$del'");

header("location:dashboard.php");

?>
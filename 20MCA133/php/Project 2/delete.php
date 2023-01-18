<?php
include "connection.php";

$del=$_GET["did"];

$result=mysqli_query($connection,"DELETE FROM `registration` WHERE `regID`='$del'");

header("location:view.php");

?>
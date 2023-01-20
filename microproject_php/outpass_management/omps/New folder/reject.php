<?php
include 'db2.php';
$rop_id=$_GET['r_id'];
mysqli_query($con,"UPDATE `role_db` SET `status`='3' WHERE role_id='$rop_id'");
        header('location: requests.php');
?>
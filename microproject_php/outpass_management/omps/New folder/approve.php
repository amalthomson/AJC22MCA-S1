<?php
include 'db2.php';
$aop_id=$_GET['a_id'];
mysqli_query($con,"UPDATE `role_db` SET `status`='1' WHERE role_id='$aop_id'");
        header('location: requests.php');
?>
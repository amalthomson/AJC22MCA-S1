<?php
include 'database_connection.php';
$su_id=$_GET['s_id'];
mysqli_query($con,"UPDATE `role_db` SET `status`='1' WHERE role_id='$su_id'");
        header('location: requests.php');
?>





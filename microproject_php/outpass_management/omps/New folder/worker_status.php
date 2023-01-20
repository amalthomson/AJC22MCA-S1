<?php
include 'database_connection.php';
$su_id=$_GET['s_id'];
$status=$_GET['status'];
if ($status == 0){
        mysqli_query($con,"UPDATE `role_db` SET `status`=1 WHERE `role_id`='$su_id'");
}
else {
        mysqli_query($con,"UPDATE `role_db` SET `status`=0 WHERE `role_id`='$su_id'");
}
header('location: workers.php');

?>





<?php
session_start();
if($_SESSION['login_admin']==""){
    header("location:index.php");
}
include 'db2.php';

$result=mysqli_query($con,"SELECT * FROM `role_db` ");
$sql2=mysqli_query($con,"SELECT * FROM `role_db` join `users` on role_db.role_id=users.role_id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css_userdash.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
              h3{
            font-family: "Raleway", Helvetica, sans-serif;
        }
        a{
          text-decoration:none;
        }
        table, th, td {
            color: aliceblue;
            
            border: 1px solid white;
        }   
        table{
            margin-left: auto;
            margin-right: auto;
           
        }
</style>
</head>
<body>
<?php include 'userside.php';?>

<div class="common-div"> <h3 >User Dashboard</h3> <div id="block_container">

<a href="outpass.php"> <div class="card-div-red"> Apply for Outpass <h4 class=card-div></h4> </div></a>

<a href="approved.php"> <div class="card-div-green"> Approved <h4 class=card-div></h4> </div></a>

<a href="rejected.php"> <div class="card-div-yellow"> Rejected <h4 class=card-div></h4> </div></a>

<a href="update.php"> <div class="card-div-blue"> Update <h4 class=card-div></h4> </div></a>

</div>

<div class="dash-table">

</div>
</div>



</body>
</html>
<?php
session_start();
if($_SESSION['login_admin']==""){
    header("location:index.php");
}
include 'db2.php';

$result=mysqli_query($con,"SELECT * FROM `role_db`");
$sql2=mysqli_query($con,"SELECT * FROM `role_db` join `users` on role_db.role_id=users.role_id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="stylesheet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

<?php include 'side.php';?>

<div class="common-div"> <h3 >Dashboard</h3>

<div id="block_container"> <a href="#"> <div class="card-div-red"> Users <h4 class=card-div></h4> </div></a>

<a href="requests.php"> <div class="card-div-blue"> Requests <h4 class=card-div></h4> </div></a>

<a href="approve.php"> <div class="card-div-green"> Approved <h4 class=card-div></h4> </div></a>

<a href="reject.php"> <div class="card-div-yellow"> Rejected <h4 class=card-div></h4> </div></a>

</div>

<div class="dash-table">
</div>
</div>

<div class="common-div">  <h3>Users</h3> </div>

    <table style="width:1000px" style="background-color:grey">


<tr>
    <th style="text-align: center;">Name</th>
    <th style="text-align: center;">Email</th>
    <th style="text-align: center;">User Type</th>
    <th style="text-align: center;">Phone</th>
    <th style="text-align: center;">Address</th>
    <th style="text-align: center;">Image</th>
    <th style="text-align: center;">Update</th>
    <th style="text-align: center;">Delete</th>

</tr>

<?php
$count = 0;
while ($row = mysqli_fetch_assoc($sql2)) {  ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td style="text-align: center;"><?php echo $row['role']; ?></td>
    <td style="text-align: center;"> <?php echo $row['mobile']; ?></td>
    <td> <?php echo $row['address']; ?></td>
    <td><img src="images/<?php echo $row['image'];?>" width="35px" height="45px"></td>
    <td style="text-align: center;"><a href="update.php?eid=<?php echo $row['role_id']; ?>">
        <input type="reset" value="Update"></td>
    <td style="text-align: center;"><a href="delete.php?did=<?php echo $row['role_id']; ?>">
        <input type="reset" value="Delete"></a>
    </td>
    </tr>


<?php } ?>

 <!--<td style="text-align: center;"> <a href="update.php?eid=<?php echo $row['role_id']; ?>">Update</td>
    <td style="text-align: center;"> <a href="delete.php?did=<?php echo $row['role_id']; ?>">Delete</td>-->
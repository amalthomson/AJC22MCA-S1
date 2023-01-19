<?php 
include 'database_connection.php';

$result="SELECT * FROM `service_type`";
$add=mysqli_query($con,$result);

 if(isset($_POST['submit']))
 {

    $fname=$_POST['name'];
    $phone=$_POST['phone'];    
    $email=$_POST['email'];
    $place=$_POST['address'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $aadhar_no=$_POST['aadhar_no'];

    mysqli_query($con, "INSERT INTO `role_db`(`email`, `password`, `role`, `status`) VALUES ('$email','$password','2', '1')");
    $roleid =mysqli_insert_id($con);

    mysqli_query($con,"INSERT INTO `users`(`fname`, `phone`, `place`, `role_id`) 
    VALUES ('$fname','$phone','$place','$roleid')");

    

        echo "<script>alert('Added');</script>";
        echo "<script>window.history.back();</script>";
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Workers</title>
    <style>
        .addservices-div{
            padding-top:20px;
            margin-left:220px;
            background:white;
            width:100%;
            border-radius:5px;
        }
        h2{
            margin-left:500px; 
            color: beige;
            font-family: "Raleway", Helvetica, sans-serif;
        }
        input[type=text],[type=password],[type=email],[type=number] {
            width: 180px;
            padding: 5px;  
            border-radius: 10px;
        }
        select{
            width:140px; 
            height:30px;
            border-radius:5px;
            margin-bottom:30px;
        }

</style>

</head>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="reg.js"> </script>
<body>
<?php include 'side.php';?>

<div class="common-div">
<h2 id="title" class="title">Add Workers  </h2>
  <div class="addservices-div">
  <form method="POST" name="fOrm" id="form" ><div id="survey-form">
      <section id="survey-fields">

        <label for="name" id="name-label">* Worker name:</label>
        <input id="name" type="text" placeholder="Enter worker name" name="fname" required>
        <div class="error" id="demo0"></div> 
        <label for="type" id="password-label">* Mobile number:</label>
        <input id="text" type="number" placeholder="Enter worker number" name="phone" required>
        <div class="error" id="demo1"></div>
        <label for="type" id="password-label">* Age:</label>
        <input id="text" type="number" placeholder="Enter worker Age" name="age" required>
        <div class="error" id="demo2"></div>
        <label for="type" id="name-label">* Gender:</label>
        <input id="text" type="text" placeholder="Enter worker Gender" name="gender" required>
        <div class="error" id="demo3"></div>
        <label for="name" id="name-label">* Email:</label>
        <input id="name" type="email" placeholder="Enter worker mail" name="email" required>
        <div class="error" id="demo4"></div>
        <label for="type" id="password-label">* Aadhar number:</label>
        <input id="text" type="number" placeholder="Enter worker Aadhar number" name="aadhar_no" required>
        <div class="error" id="demo5"></div>
        <label for="name" id="name-label">* Place:</label>
        <input id="text" type="text" placeholder="Enter worker location" name="place" required>
        <div class="error" id="demo6"></div>
        <label for="type" id="password-label">* Password:</label>
        <input id="text" type="text" placeholder="Enter worker password" name="password" required>
        <div class="error" id="demo7"></div>
        <label for="type" id="password-label">* Service:</label>
        <select name="profession" required>
        
        <option disabled selected>Choose type</option>
        <?php
            while ($row=mysqli_fetch_assoc($add)) { ?>
            <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
            <?php } ?>
        </select>

      <input type="submit" value="Submit" name="submit"><input type="reset" value="Clear">
      </section>
    </div>
    </form> 
  </div>
</div>

</div>
</body>
</html>


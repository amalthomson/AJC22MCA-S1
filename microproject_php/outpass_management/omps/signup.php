<?php 
include 'db2.php';


 if(isset($_POST['submit']))
 {

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];    
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $image=$_FILES["img"]["name"];
    $temp=$_FILES["img"]["tmp_name"];

    move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"]);

    mysqli_query($con, "INSERT INTO `role_db`(`email`, `password`, `role`, `status`) VALUES ('$email','$password','user', '1')");

    $roleid = mysqli_insert_id($con);
    
    mysqli_query($con,"INSERT INTO `users`(`name`, `mobile`, `address`, `role_id`, `image`) VALUES ('$name','$mobile','$address','$roleid','$image')");

    

        echo "<script>alert('User Added Successfully');</script>";
        echo "<script>window.history.back();</script>";
 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="css_userlogin.css">
</head>
<body style="background-color:black">
     <form action="#"  method="post"  enctype="multipart/form-data">
     	<h2>SIGN UP</h2>
     
          <label>Name</label> <input type="text" name="name" placeholder="Name" value="">

          <label>Email</label> <input type="text" name="email" placeholder="email" value="">
          
          <label>Phone</label> <input type="text" name="mobile" placeholder="Phone" value="">

          <label>Image</label> <input type="file" name="img" placeholder="Image" value="">

          <label>Address</label> <input type="text" name="address" placeholder="address" value="">
          
          <label>Password</label> <input type="password" name="password" placeholder="Password">

          <label>Confirm Password</label> <input type="password" name="re_password" placeholder="Confirm Password">
          
          <input type="submit" name="submit" value="Sign Up">

          <a href="userlogin.php" class="ca"><u>Already have an account?</u></a>

     </form>
</body>
</html>




	
	



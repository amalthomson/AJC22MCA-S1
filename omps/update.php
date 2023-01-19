
<?php
   include 'db2.php';
   $id = $_GET['eid'];
   $sql = "SELECT * FROM `users` WHERE role_id = $id ";
   $result = mysqli_query($con,$sql);

       //$result=mysqli_query($con,"SELECT * FROM `role_db`");
       //$sql=mysqli_query($con,"SELECT * FROM `role_db` join `users` on role_db.role_id=users.role_id");
   
   if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$mobile= $_POST['mobile'];
       $address=$_POST['address'];
       $image=$_FILES["image"]["iname"];
       $sql2 = "UPDATE `users` SET `name`='$name', `mobile`='$mobile', `address`='$address', `image`='$image' WHERE `role_id`= $id";
       //$sql=mysqli_query($con,"SELECT * FROM `role_db` join `users` on role_db.role_id=users.role_id");
	$result = mysqli_query($con,$sql2);
	if($result==1)
	{
		echo "Updated ";
	}
	else
	{
		echo "not updated ";
	}
	header( "Location: dashboard.php" ); 
}
  
?>

<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="css_userlogin.css">
</head>
<body>
     <form action="#"  method="post">
     <?php
while($row = mysqli_fetch_array($result))
  {
	    ?>
     	<h2>SIGN UP</h2>

       <label>Name</label> <input type="text" name="name" placeholder="Name" value="<?php echo $row["name"]; ?>">

           <!-- <label>Email</label>
              <input type="text" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $row['email']; ?>">-->

       <label>Phone</label> <input type="text" name="mobile" placeholder="Phone" value="<?php echo $row['mobile']; ?>">

       <label>Address</label> <input type="text" name="address" placeholder="address" value="<?php echo $row['address']; ?>">

       <label>Image</label> <input type="file" name="image" placeholder="image" value="<?php echo $row['image']; ?>">


     	<!-- <label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br> -->
          
          <input type="submit" name="submit" value="Update">

          
          <?php } ?>
          
     </form>
</body>
</html>
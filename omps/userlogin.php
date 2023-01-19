<?php
include 'db2.php';
session_start();
if(isset($_SESSION['login_admin']))
{
  header("location:dashboard.php");
}
if (isset($_POST["submit"]))
{
  $usrname = mysqli_real_escape_string($con,$_POST['usrnm']);
  $epassword = mysqli_real_escape_string($con,$_POST['pswd']);

  $sql=mysqli_query($con,"SELECT * FROM role_db WHERE email='$usrname' AND password='$epassword'");
  while ($row = mysqli_fetch_assoc($sql)) {

  if($row['role']=='user')
  {
    $_SESSION['login_admin']=$row['role_id'];
    header("location: userdash.php");
  }
  
  else
  {
    echo "<script>alert('Username and password are incorrect')</script>";
    echo "<script>window.location='userlogin.php'</script>";
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css_userlogin.css">
</head>
<body style="background-color:black">
     <form action="userlogin.php" method="post">
     	<h2>LOGIN</h2>
    
		 <label for="name" id="name-label">Email:</label>
        <input id="name" type="email" placeholder="Enter your email" name="usrnm" required>
        <label for="Email" id="password-label">Password:</label>
        <input id="email" type="password" placeholder="Enter your password" name="pswd" required>
      <!-- <input type="submit" value="Submit" name="submit"> -->

     	<button type="submit" value="submit" name="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
<html>

<head>
    <title>Validation</title>
</head>

<style>
    table{
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        margin-top:1em;
        padding:1em;
    }
    tr,td,th{
        padding:1em;
        text-align: left;
    }
    .center th{
        text-align: center;
    }
    
</style>

<body>
	<br>
	<br>
	<br>
	<br>
	<center><h1><b><u>PHP VALIDATION</u></b></h1><center>
    <form name="form" action="#" method="POST">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name"> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"> </td>
            </tr>
            <tr>
                <th>Mob NO </th>
                <td><input type="tel" name="mobile"> </td>
            </tr>
            <tr>
                <th>Username </th>
                <td><input type="text" name="user"> </td>
            </tr>
            <tr>
                <th>Password </th>
                <td><input type="password" name="password"> </td>
            </tr>
            <tr class="center">
                <th colspan="2"><input type="submit" value="submit" name="submit"></th>
            </tr>
        </table>
    </form>-
	
<?php
    $con = Mysqli_Connect("localhost","root","","sql");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];  
        $email = $_POST['email'];  
        $mobile = $_POST['mobile'];  
        $user = $_POST['user'];  
        $password = $_POST['password'];

        if($_POST['name'] == ""){
            echo "<script>alert('Enter First Name')</script>";
        }
        else if($_POST['email'] == ""){
            echo "<script>alert('Enter Email')</script>";
        }
        else if($_POST['mobile'] == ""){
            echo "<script>alert('Enter Valid Mobile Number')</script>";
        }
        else if($_POST['user'] == ""){
            echo "<script>alert('Enter User Name')</script>";
        }
        else if($_POST['password'] == ""){
            echo "<script>alert('Enter Password')</script>";
        }
        else if (strlen($_POST["password"]) == "") {
                echo "<script>alert('Enter Password')</script>";
        }
        else{

            $query = "INSERT INTO `form`(`name`, `email`, `mobile`, `user`, `password`) VALUES ('$name','$email','$mobile','$user','$password')";
            
    }
    }
?>
   
   
</body>
</html>

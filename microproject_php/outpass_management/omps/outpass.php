
<?php 
include 'db2.php';

//$result="SELECT * FROM `role_db`";
//$add=mysqli_query($con,$result);

 if(isset($_POST['submit']))
 {

    $date_out=$_POST['date_out'];
    $date_in=$_POST['date_in'];
    $reason=$_POST['reason'];

    $roleid = mysqli_insert_id($con);

    mysqli_query($con,"INSERT INTO `outpass`(`date_out`, `date_in`, `reason`, `role_id`) VALUES ('$date_out','$date_in','$reason','$roleid')");

    echo "<script>alert('Applied for OutPass Successfully');</script>";
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
    <title>Apply for OutPass</title>
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
    <script type="text/javascript" src="js_outpass.js"> </script>
<body>

<?php include 'userside.php';?>

<div class="common-div">
<h2 id="title" class="title">Apply for Outpass </h2>
  <div class="addservices-div">
  <form action='#' method="POST" name="form" id="form" ><div id="survey-form">
      <section id="survey-fields">

        <label for="name" id="name-label">Date Out</label>
        <input id="name" type="date" placeholder="Enter Out Date" name="date_out" required>
        <div class="error" id="demo0"></div>

        <label for="type" id="name-label">Date In</label>
        <input id="text" type="date" placeholder="Enter In Date" name="date_in" required>
        <div class="error" id="demo1"></div>
        
        <label for="type" id="name-label">Reason</label>
        <input id="text" type="textarea" placeholder="Enter a reason" name="reason" required>
    
      <input type="submit" value="Submit" name="submit"><input type="reset" value="Clear">
      </section>
    </div>
    </form> 
  </div>
</div>

</div>
</body>
</html>


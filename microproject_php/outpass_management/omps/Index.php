<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css_index_1.css">
<link rel="stylesheet" href="css_index_2.css">

<body>

<nav class="w3-bar w3-black">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="userlogin.php" class="w3-button w3-bar-item">User Login</a>
  <a href="signup.php" class="w3-button w3-bar-item">User Registration</a>
  <a href="login.php" class="w3-button w3-bar-item">Admin Login</a>
</nav>


<div >
<style>
    .centered {
        color: white;
        font-size: 40px;
	-webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
  position: absolute;
  top: 40%;
  left: 50%;
  
  transform: translate(-50%, -50%);
}
    </style>

<center> <h2 class="w3-wide"><b> Hostel Outpass Management </b> </h2> </center>

<section>

  <img class="mySlides" src="images/1.jpg"
  style="width:100%" style="height: 150px">
  <img class="mySlides" src="images/2.jpg"
  style="width:100%" style="height: 150px">
   <!-- style="height:50%" -->
  <img class="mySlides" src="images/3.jpg"
  style="width:100%" style="height: 150px">

</section>


<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
   
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>


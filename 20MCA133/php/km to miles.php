<?php
if(isset($_POST["sub"]))
{
$km=$_POST["num1"];
$mile = 0.621371*$km;
echo "Distance in km:".$km."<br>";
echo "Distance in miles:".$mile;
}
?>
<form method="POST">
Enter distance in km:<input type="text" name="num1"><br>
<input type="submit" name="sub">
</form>

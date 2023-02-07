
<?php
include 'connection.php';
if(isset($_POST["sub"]))
{
$a=$_POST["name"];
$b=$_POST["phnum"];
$c=$_POST["email"];
$d=$_POST["gender"];
$e=$_POST["address"];
$f=$_POST["country"];

$sql= "INSERT INTO `registration`(`Name`, `Phone Number`, `Email`, `Gender`, `Address`, `Country`) VALUES ('$a','$b','$c','$d','$e','$f')";
$result=mysqli_query($connection, $sql);

if($result==1)
	echo "Insertion_Successful";
else
	echo "Insertion_Failed";
}
?>


<title>Registration Form</title>

<body bgcolor="lightgreen">

<center>

<table class="table2">
<tr>
<td>

<head>
<h2 style="color:red;" align="center">REGISTRATION FORM</h2>
<style>
.table1	{
		border-style:solid;
		border-width:3px;
		font-size: 20px;
		border-color:black;
		margin: 10px;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
		}
.table2	{
		padding-top: 150px;
		}	
</style>
</head>

<form action="#"  method="POST">

<table style="background-color:lightskyblue;" class="table1">

<tr>
<td> NAME : </td>
<td> <input type="text" name="name"> </td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> PHONE NUMBER : </td>
<td> <input type="text" name="phnum"> </td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> EMAIL : </td>
<td> <input type="text" name="email"> </td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> GENDER : </td>
<td> <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female </td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> ADDRESS : </td>
<td> <textarea name="address" rows="5" cols="21"> </textarea></td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> COUNTRY : </td>
<td> 
<select name="country">
<option>Country:</option>
<option>India</option>
<option>Pakistan</option>
<option>Sri Lanka</option>
<option>Spain</option>
<option>France</option>
<option>England</option>
<option>China</option>
<option>Japan</option>
<option>Brazil</option>
<option>UAE</option>
</select> 
</td>
</tr>

<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td align="right" colspan="2"> <input type="submit" name="sub" value="Register"> </td>
</tr>

</table>

</form>

</td>
</tr>
</table>

</center>

</body>
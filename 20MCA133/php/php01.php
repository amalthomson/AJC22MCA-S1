
<?php
if(isset($_POST["Save"])) {
$x=$_POST["num1"];
$y=$_POST["num2"];

$sum=$x+$y;

}
?>  

<form action="#" method="post">

<table>

<tr>
<td>NUMBER 1 : </td>
<td> <input type="text" name="num1"> </td>
</tr>

<tr>
<td>NUMBER 2 : </td>
<td> <input type="text" name="num2"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="Save" value="Calculate"> </td>
</tr>

<tr>
<td>  </td>
<td>  </td>
</tr


<tr>
<td> SUM is : </td>
<td> <input type="text" name="Save" value="<?php echo $sum  ?>"> </td>
</tr>

</form>




<?php

if($num1>$num2 && $num1>$num3){
     echo $num1;
     }
else {
    if($num2>$num1 && $num2>$num3){
    echo $num2;
    }
	else{
		echo $num3;
		}
	}


?>


<form>
<table border="3">

<tr>
<td> FIRST NUMBER : </td>
<td> <input type="text" name="num1"> </td>
</tr>

<tr>
<td> SECOND NUMBER : </td>
<td> <input type="text" name="num2"> </td>
</tr>

<tr>
<td>  </td>
<td> <input type="submit" name="xyz" value="SWAP"> </td>
</tr>

</form>
</table>

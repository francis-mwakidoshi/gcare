<?php

include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
   if($_POST['sub']){
   	echo $_POST['name'];
   }             
?>
	<form name="Nadmin" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table>
	<tr><td><label>Name:</label></td><td>
	<input type=name"  name="name" size="30"></td>
	</tr>
	<tr><td><label>Email:</label></td><td>
	<input type=name"  name="mail" size="30"></td></tr>
	<tr><td><label>Phone No:</label></td><td>
	<input type=name"  name="phone" size="30"></td></tr>
	<tr><td><label>National Id:</label></td><td>
	<input type=name"  name="national" size="30"></td></tr>
	<tr><td><label>Hotel Name:</label></td>
	<td>
	<select name="hotels">
        <?php 
		$que1=mysql_query("SELECT * FROM hotels");
		$getrow = mysql_fetch_array($que1);
        	do{
				echo "<option value=".$getrow['hotelid'].">".$getrow['name']."</option>";
			}while($getrow=mysql_fetch_array($que1));
		?>
        </select>
	</td>
	</tr>
	<tr><td><input type="reset" name="reset" value="reset"></td>
	<td><input type="submit" name="sub" value="add"></td></tr>
	</table>
	</form>
	
<?php



?>

<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
 @$Que="SELECT * FROM users WHERE username='{$_SESSION['username']}'";
 $result=mysql_query($Que);
 $array=mysql_fetch_array($result);
$_SESSION['name']=$array['name'];
$_SESSION['email']=$array['email'];
@$hotel=$_POST['hotel'];
@$comment=$_POST['comment'];
@$category=$_POST['category'];
@$submit=$_POST['submit'];
?>
<html>
<head>

<link type="text/css" rel="stylesheet" href="http://localhost/Gcare/public/css/comment.css"></link>
<link href="http://localhost/Gcare/public/css/pwdwidget.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="http://localhost/Gcare/public/js/pwdwidget.js"></script>
</head>
<body>
<div id="header">

</div>
<div id="main">
<div id="menubar">
 
</div>
<div id="commentpane">
<?php
if(isset($submit)){
$Hpresent="SELECT * FROM hotels WHERE categoryid='$category' and name='$hotel'";
$Hresult=mysql_query($Hpresent)or die(mysql_error());
$row=mysql_fetch_array($Hresult);
$hotelid = NULL;
if($row < 1){
	$newhotel = mysql_query("INSERT INTO hotels VALUES ('','$hotel','$category')");
	$gethotelid = mysql_query("SELECT * FROM hotels WHERE categoryid='$category' and name='$hotel'");
	$getid = mysql_fetch_array($gethotelid);
	$hotelid.= $getid['hotelid'];
}
$hotelid.= $row['hotelid'];

 $Qcomment="INSERT INTO comments VALUES ('NULL','{$array['userID']}','$hotelid','$comment')";
 $Rcomment=mysql_query($Qcomment)or die(mysql_error());
	
}
?> 
<h2>Leave a comment.</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

<table>
<tr>
<td>Name:</td><td><?php echo $_SESSION['name'];?></td></tr>
<tr>
<td>Email:</td><td><?php echo $_SESSION['email'];?></td></tr>
<tr>
<td>Hotel checked in:</td><td><input type="text" name="hotel" size="21.6"></td><td> Category:</td>
<td><select name="category">
        <?php 
		$que1=mysql_query("SELECT * FROM hotelcategory");
		$getrow = mysql_fetch_array($que1);
        	do{
				echo "<option value=".$getrow['categoryid'].">".$getrow['category']."</option>";
			}while($getrow=mysql_fetch_array($que1));
		?>
        </select></td>
</tr>
<tr>
<td>Comment:</td><td>
<textarea cols="50" rows="5"  placeholder="write a comment" name="comment"></textarea></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Comment" name="submit"></td>
</tr>


</table>
</form>
<a href="http://localhost/Gcare/index.php">Home page</a>
</div>

</div>
</body>
</html>
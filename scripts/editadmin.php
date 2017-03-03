<?php
$msg=null;
$id=$_GET['id'];
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');

if(isset($_POST['update'])){
	foreach($_POST as $key=>$value)
	{
		$$key=$value;
	}
	//validation
	if(empty($name)||empty($username)||empty($password)||empty($Email)||empty($PhoneNo)||empty($IdcardNo))
	{
		$mgs.="Please fill in all the details";
	}
	else{
		$update=mysql_query("UPDATE users SET name='$name',username='$username',password='$password',Email='$Email',
		PhoneNo='$PhoneNo',IdcardNo='$IdcardNo' WHERE user_id='$id'")or die(mysql_error());
		if($update)
		{
			header('Location:user.php');
		}else{
            echo "an error occured while updating";
        }
	}
	
	
}


$q=mysql_query("select * from users where user_id='$id'");
$result=mysql_fetch_assoc($q);

echo $id;
?>
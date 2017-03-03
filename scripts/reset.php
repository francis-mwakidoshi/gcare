<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
?>

<html>
<head>

<link type="text/css" rel="stylesheet" href="http://localhost/Gcare/public/css/resetpass.css"></link>
<link href="http://localhost/Gcare/public/css/pwdwidget.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="http://localhost/Gcare/public/js/pwdwidget.js"></script>
</head>
<body>
<div id="header">

</div>
<div id="main">
<div id="menubar">
 
</div>
<div id="resetpane"> 
<?php
$mail=@$_POST['mail'];
$Npass=md5(@$_POST['pass']);
$reset=@$_POST['reset'];
if(isset($reset)){
	$Query="SELECT * FROM users WHERE email='$mail'";
	$Qmail=mysql_query($Query);
	$rw=mysql_fetch_array($Qmail);
	if($rw['email']==$mail){
		$Que="UPDATE users SET pswd='$Npass' WHERE email='$mail'";
		$RQ=mysql_query($Que)or die(mysql_error());
		echo "password Reset succefullly";
	}else{
		echo "Wrong email address,try again";
		
		
	}
	
}
	

?>
<h2>Welcome user To The Reset Password page.</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table>
<tr>
<td>Enter Your Email:</td><td><input type="text" name="mail" size="21.6"></td>
</tr>
<tr>
<td> Enter Your new password:</td><td>
<div class='pwdwidgetdiv' id='thepwddiv'></div>
	  <script  type="text/javascript" >
      var pwdwidget = new PasswordWidget('thepwddiv','pass');
      pwdwidget.MakePWDWidget();
      </script>
	  <noscript>
      <div><input type="password" name="pass" size="30"></div>
	   </noscript>
	  </td>
     
</tr>
<tr>
<td></td><td><input type="submit" value="reset" name="reset"></td>
</tr>


</table>
</form>
<a href="http://localhost/Gcare/index.php">Home page</a>
</div>
</div>
</body>
</html>
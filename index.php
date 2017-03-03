<?php
session_start();
ob_start();
include_once('functions/validate.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gcare System</title>
        <link href="public/css/interface.css" type="text/css" rel="stylesheet"/>
		<link href="public/css/pwdwidget.css" type="text/css" rel="stylesheet"/>
		<link type="text/css" href="public/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="public/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="public/js/pwdwidget.js"></script>
		<script>
		$(function(){
		$("#accordion").accordion({ header: "h3" });
		});
		</script>
		     </head>
    <body>
    <div id="header">
    
    </div>
    <div id="content">
    <div id="menubar"></div>
  <div id="login">
 
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="loginf" name="login">
       <table>
	   <tr>
	   <td> Username:</td><td><input type="text" name="username" size="20"  id="user"/><span class="required">*</span></td>
	   </tr>
        <tr><td>Password:</td><td><input type="password" name="pswd" SIZE="20" id="password" /><span class="required">*</span></td>
		</tr>
		<tr><td><input type="hidden" name="submitted" value="2"></td></tr>
        <tr>
		<td><input type="reset" name="reset" value="Reset"/></td><td>
        <input type="submit" name="submit" value="Login"/></td>
		</tr></table>
        <p>Login here &nbsp;| &nbsp; Forgot your password?<a href="http://localhost/Gcare/scripts/reset.php">Reset</a></p>

    </form>
     <?php
	 validate_login();
 if(isset($_POST['submit'])){
  include('pages/auth.php');
 }
  ?>
  <p>Do you want to sign up to Gcare?</p>
  <a href="http://localhost/Gcare/pages/newuser.php">Sign Up here!</a>
     </div>
  <div id="maincon">

        <h1>What can Gcare Do?</h1>
        This is an application that brings solutions to locating restaurants,cafes and event resorts
        in unfamiliar environment with the help of Google map.<br>
        <b>Steps</b>
		
<div id="accordion">
<div>
<h3><a href="#">Access to Gcare</a></h3>
<div>Login to Gcare if you have login details,If not you can Sign up through <b>Sign up</b> link</a></div>
</div>
<div>
<h3><a href="#">Search</a></h3>
<div>Search your current location using the search button in the map.</div>
</div>
<div>
<h3><a href="#">Locate</a></h3>
<div>locate the nearest restaurants,resorts,cafes or hotels from where you are.</div>
</div>
<div>
<h3><a href="#">Select</a></h3>
<div>Then,select any of your preference by viewing and checking through clicking on the location shown on the map.</div>
</div>
<div>
<h3><a href="#">Destination</a></h3>
<div>If the destination suits you,go ahead and make reservations if necessary.You can leave a comment or send a message</div>
</div>
</div>

   <iframe src="http://www.facebook.com/plugins/like.php?href=localhost/Gcare"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:80px">
   </iframe>
   <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
    {js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}
(document,"script","twitter-wjs");</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone>
  </div>
   

</div>
    
 <div id="footer">
      Gcare &nbsp; | &nbsp; 2016
    <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            Antony **** powered by Google.</p>
   </div>
   <?php
   ob_end_flush();
   ?>
    </body>
</html>

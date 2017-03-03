<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gcare System</title>
        <link href="http://localhost/Gcare/public/css/newuser.css" type="text/css" rel="stylesheet"/>
		<link href="http://localhost/Gcare/public/css/pwdwidget.css" type="text/css" rel="stylesheet"/>
                <script type="text/javascript" src="http://localhost/Gcare/public/js/jquery.js"></script>
		 <script type="text/javascript" src="http://localhost/Gcare/public/js/jquery.validate.js"></script>
		   <script type="text/javascript" src="http://localhost/Gcare/public/js/pwdwidget.js"></script>
	<script>
		   $(document).ready(function() {
		   $("#name").focus();
        var validationOptions = {
			rules: {
					name:{
						required:true,
						minlength:5
					        },
					username: { 
							required: true,
							minlength: 4
						},
					pswd:{
						required:true,
						minlength:6	
						},
					mail: {
							required: true,
							email: true
							},
					cardno:{
							required:true
							},
					phone:{
						required:true
					},
					country:{
						required:true
					}	
				},
			messages: {
				username: {
						required: "<font color='red'>Username is required</font>",
						minlength: "<font color='red'>Username must be atleast 4 chars</font>"
					},
				mail: {
					required: "<font color='red'>Please enter an email address</font>",
					email: "<font color='red'>Please enter a valid email address</font>"
					},
				name:{
					required:"<font color='red'>Name is required</font>",
					minlength:"<font color='red'>Name must be at least 6 characters</font>"
				},
				pswd:{
					required: "<font color='red'>password is required</font>",
					minlength:"<font color='red'>password must be at least 6 characters</font>"
				},
				cardno:{
					required:"<font color='red'>Fill the card no field</font>"
				},
				country:{
					required:"<font color='red'>Fill the country field</font>"
				},
				phone:{
					required:"<font color='red'>Fill the  phone field</font>"
				}
				
				}
		}
		
		
		$("#newuserform input").blur(function() {
			$("#newuserform").validate(validationOptions);
		});
    });
	</script>
		     </head>
    <body>
    <div id="header">
    
    </div>
	<div id="main">
<div id="menubar">
 <a href="http://localhost/Gcare/index.php">Home page</a>
</div>
<div id="commentpane">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$sql="SELECT * FROM usertype";
$usertypes=mysql_query($sql,$link);

    $name=@$_POST['name'];
    $username=@$_POST['username'];
    $password=@$_POST['pswd'];
    $mail=@$_POST['mail'];
    $phone=@$_POST['phone'];
    $cardno=@$_POST['cardno'];
    $user_type=@$_POST['user_type'];
    $register=@$_POST['register'];
    $country=@$_POST['country'];
		 if($register){
  $query="INSERT INTO users(name,username,pswd,email,phoneNo,IDcardNo,Country,usertypeID) VALUES ('$name','$username',
         MD5('$password'),'$mail','$phone','$cardno','$country','$user_type')";
  $result=mysql_query($query)or die(mysql_error());
     echo "You are successfully registered . Welcome !!!";
 	       }
    
?>
<p><b>Sign Up to Gcare</b></p>

   <form method="post" id="newuserform"  action="<?php echo $_SERVER['PHP_SELF']; ?>" name="newuserf">
     <table>
       <tr>
	<td>Name:</td><td><input class="input" name="name" SIZE="22.0" id="name" maxlength="33" "/></td>
	   </tr>
       <tr>
	   <td>Username:</td><td><input class="input" type="text" name="username" size="22.0" id="usern" maxlength="9" /></td>
	   </tr>
        <tr>
	  <td> Password:
	  </td>
	  <td>
	  <div class='pwdwidgetdiv' id='thepwddiv'></div>
	  <script  type="text/javascript" >
      var pwdwidget = new PasswordWidget('thepwddiv','pswd');
      pwdwidget.MakePWDWidget();
      </script>
	  <noscript>
      <div><input class="input" type="password" name="pswd" SIZE="20" id="passw" /></div>
      </noscript>
	  </td>
	  </tr>
      <tr>
	  <td> Email:</td><td><input class="input" type="email" name="mail" SIZE="22.0" id="email" maxlength="55" /> </td>
	  </tr>
       <tr>
	   <td>Phone No:</td>
	   <td><input class="input" type="phone" name="phone" SIZE="22.0" id="phone" pattern="^[0-9]{10}$"/></td>
	   </tr>
       <tr><td>Idcard No:</td><td><input class="input" type="varchar" name="cardno" SIZE="22.0" id="id" 
	    pattern="^[0-9]{8}$"/>
	   </td></tr>
       <tr><td>Country:</td><td><input class="input" type="varchar" name="country" SIZE="22.0" id="id" placeholder="Country name"/></td></tr>
       <tr>
       <td>User Type:</td>
       <td>
        <select name="user_type">
        <?php while($row=mysql_fetch_array($usertypes)):?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['usertype'];?></option>
        <?php endwhile;?>
        </select>
       </td>
       </tr>
     </table>
       <input type="reset" name="reset" value="Reset"/>&nbsp &nbsp

       <input type="submit" name="register"  id="register" value="register"/>
      
    </form>
  
 </div>
<div id="footer">
       Gcare &nbsp; | &nbsp; 2016
   <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            francis mwakidoshi **** powered by Google.</p>
</div>
</div>
</body>
</html>

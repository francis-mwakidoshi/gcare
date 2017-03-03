<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
function PasswordResetForm(){
    echo "<form method=\"post\" action=\"http://localhost/Gcare/pages/account.php?reset=true\">";
    echo "<label>Old Password</label>";
    echo "<input type=\"password\" name=\"oldpassword\" </br> ";
    echo "<label>New Password</label>";
    echo "<input type=\"password\" name=\"newpassword\"</br>";
    echo "<input type=\"submit\"  name=\"submit\" value=\"Change password\"";
    echo "<a  href=\"http://localhost/Gcare/pages/account.php?username={$_SESSION['username']}&reset=true\" ></a>";
    echo "</form>";
}

function edit_password(){
   
    if(!isset($_POST['submit'])){
         PasswordResetForm();
    }
    else
    {
    $pass=md5($_POST['oldpassword']);
    $Npass=md5($_POST['newpassword']);
    $select=mysql_query("SELECT * FROM users WHERE username='{$_SESSION['username']}'")or die(mysql_error());
    $row=mysql_fetch_array($select);
    if($row['pswd']==$pass){
    $qu="UPDATE users SET pswd='$Npass' WHERE pswd='$pass'";
    $result=mysql_query($qu);
    echo "<b><font color=red><br>Password has been successfully reset.</br></font></b>";
    }
    else{
        echo"<b><br><font color=red>password mismatch,please reset again</font></br></b>";
        PasswordResetForm();
        exit;
    }
    }
}
function update_details($post) {
		$query="UPDATE users SET name='{$post['name']}',username='{$post['username']}',email='{$post['mail']}',phoneNo='{$post['phone']}',IDcardNO='{$post['cardno']}',Country='{$post['country']}'  WHERE username='{$_SESSION['username']}' ";
		$result=mysql_query($query);
		if(!$result) {
			echo "Update failed ".mysql_error();
		}
		//header("Location:http://localhost/Gcare/pages/account.php?update=true");
	}
function update() {
		$query="SELECT * FROM users WHERE username='{$_SESSION['username']}'";
		$result=mysql_query($query);
	?>
		<table bgcolor="#cccccc"  style="padding:10px;-border-radius:1em;-moz-border-radius:1em; -webkit-border-radius:1em; margin-top:10px;">
				<tr valign="top">
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
                </tr>
					
	     <?php
         $row=mysql_fetch_array($result);
		if($row) { ?>
				<form  method="post" action="http://localhost/Gcare/pages/account.php?update=true">
				<tr>
					<td><input type="text" name="name" style="width:150px;" value="<?php echo $row['name']; ?>"/></td>
					<td><input type="text" name="username" style="width:150px;" value="<?php echo $row['username']; ?>"/></td>
                <td><input type="text" name="mail" style="width:150px;" value="<?php echo $row['email'];?>"/></td></tr>
               <tr><th>PhoneNO</th>
					<th>IDcardNO</th>
					<th>Country</th>
				</tr>
               <tr>
					<td><input type="text" name="phone" style="width:150px;" value="<?php echo $row['phoneNo']; ?>"/></td>
					<td><input type="text" name="cardno" style="width:150px;" value="<?php echo $row['IDcardNo']; ?>"/></td>
					<td><input type="text" name="country" style="width:150px;" value="<?php echo $row['Country']; ?>"/></td>
					<td><input type="submit" name="update" style="width:150px;"value="Update" 
					onclick="confirm('are you sure you want to change your details?')"/>
					<a  href="http://localhost/Gcare/pages/account.php?username=<?php echo $_SESSION['username']; ?>
					&update=true" ></a></td> </tr></form></table>
					       <?php
							if($_POST['update']) {
								update_details($_POST);
							} ?>
				
     
<?php	}
 }

?>

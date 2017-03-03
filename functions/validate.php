<?php
function validate_login(){
	if(@$_POST['submitted']==2){
	$errormsg="";
		if($_POST['username']){
			$username=$_POST['username'];
		}else{
		$errormsg="please enter username";
		}
		if($_POST['pswd']){
			$pswd=$_POST['pswd'];
		}else{
		if($errormsg){
			$errormsg=$errormsg." and password";
		}else{
			$errormsg="password field can no be left blank.";
		}
			
		}
	}
	
}
?>
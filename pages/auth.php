<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
validate_login();
$username=$_POST['username'];
 $pswd=$_POST['pswd'];
//if((!isset($username))||(!isset($pswd))){
 //   echo "wips";
  //  header("location:index.php");
//}
   //elseif (empty($username) || empty($pswd)) {
  // echo "Fill all the fields.";
//header( "Location: index.php" );
//}
//else{
$username = addslashes($_POST['username']);
$pswd = md5($_POST['pswd']); 
//set the database connection variables

include_once('configurations/dbconnect.php');

$result=mysql_query("select * from users where username='$username' AND pswd='$pswd'"); 

//check that at least one row was returned

$rowCheck = mysql_num_rows($result);
if($rowCheck > 0){
while($row = mysql_fetch_array($result)){

  //start the session and register a variable

$_SESSION['username']= $row['username'];
 
  
  if($row['usertypeID']==4){
                  header("Location:pages/adminpanel.php");
     }
   else{
  //we will redirect the user to another page where we will make sure they're logged in
  header( "Location:pages/home.php" );
     }
 }
}
  else {
//if nothing is returned by the query, unsuccessful login code goes here...
  echo '<font color=red>Incorrect login name or password. Please try again.<br></font>';
  
  }


?>

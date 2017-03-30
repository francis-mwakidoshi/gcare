<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/functions/edit.php');
?>
<html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="http://localhost/Gcare/public/css/main.css" type="text/css" rel="stylesheet"></link>
        </head>



<div id="header">

    </div>
    <div id="content">
    <div id="menubar">

   
    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    &nbsp;&nbsp;<a href="http://localhost/Gcare/pages/home.php"><b><<</b></a>&nbsp;&nbsp;
    <a href="http://localhost/Gcare/scripts/logout.php" id="acc" onclick="alert('You have succesfully logged out of Gcare.Bye Bye')">
    Log out</a>

    </div>

  
 <div  style="width:685px; height: 400px; margin-left:100px; background-color:#ebe9d4; margin-top:50px; padding-left:35px; padding-top:35px;">
        <?php
          echo "Hi&nbsp;&nbsp;&nbsp;".@$_SESSION['username']."</br></br>";
          echo "These are your Account Details based On your Registration:-</br>";
         @$query="SELECT name,username,email,IdcardNo,phoneNo FROM users WHERE  username='{$_SESSION['username']}'";
         $result=mysql_query($query);
         echo "<table border='1'>
        <tr>
        <th>Name</th>
        <th>Username</th>
        <th>E_mail</th>
        <th>phone No</th>
        <th>Id Card Details</th>
        </tr>";
         while($row=mysql_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['phoneNo'] . "</td>";
          echo "<td>" . $row['IdcardNo'] . "</td>";
          echo "</tr>";
         }
         echo "</table>";
         mysql_close($link);
        ?>
        <br></br>
        <!--<a href="http://localhost/Gcare/pages/account.php?reset=yes">Change Password</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://localhost/Gcare/pages/account.php?update=yes">Edit Account Details</a>-->
                    <?php
                    if(isset($_GET['reset'])){
                        edit_password();
                    }
                    if(isset($_GET['update'])){
                        update();
                    }
                    ?>
          </div>
    </div>
  


 <div id="footer">
   Gcare &nbsp; | &nbsp; 2016
   <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            francis mwakidoshi **** powered by Google.
   </div>

    </body>
</html>

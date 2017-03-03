<html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="http://localhost/Gcare/public/css/main.css" type="text/css" rel="stylesheet"></link>
        <link href="http://localhost/Gcare/public/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <script src="http://localhost/Gcare/public/js/jquery.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery-ui.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mousewheel.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mCustomScrollbar.js"></script>
    </head>
    <body>
    <div id="header">

    </div>
    <div id="content">
    <div id="menubar">

   <table id="pane" ><tr>
   <td><a href="http://localhost/Gcare/pages/home.php">Home</a></td><td> | </td>
   <td><a href="http://localhost/Gcare/pages/adminpanel.php">Control panel</a></td><td> | </td>
   <td><a href="http://localhost/Gcare/pages/account.php">Account</a></td><td> | </td>
   <td> <a href="http://localhost/Gcare/index.php">Log out </a></td><tr></table>
    </div>
    <div id="image"><image src='http://localhost/Gcare/public/images/cpanel.png' ></image>
    <script>(function($){
        $(document).ready(function(){
            $("#controlpanel").mCustomScrollbar();
        });
    })(jQuery);
</script>
    Administrator >> Control Panel</div>
    <div id="controlpanel">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$customquery="SELECT * FROM users";
$result=mysql_query($customquery);
$Custrow=mysql_fetch_assoc($result);
echo"<table id='tcustomers' style=\"text-align:center;border:1px solid #ccc; padding:10px; \">";
echo"<tr bgcolor=#808000><th> Name</th> <th>Username </th> <th>Email </th> <th>PhoneNo </th> <th>IdcardNo </th> <th>Country </th> </tr>";
do{
    echo "<tr>";
    echo"<td>".$Custrow['name']."</td><td>".$Custrow['username']."</td><td>".$Custrow['email']."</td><td>".$Custrow['phoneNo']."</td><td>".$Custrow['IDcardNo']."</td><td>".$Custrow['Country']."</td><td>";
    echo "</tr>";
}
while($Custrow=mysql_fetch_assoc($result));
echo"</table>";
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

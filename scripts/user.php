<?php

?>
 <html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="http://localhost/Gcare/public/css/user.css" type="text/css" rel="stylesheet"></link>
        <link href="http://localhost/Gcare/public/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="http://localhost/Gcare/public/js/themes/base/jquery.ui.all.css"/>
		<link rel="stylesheet" href="../demos.css"/>
        <script src="http://localhost/Gcare/public/js/jquery.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery-ui.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mousewheel.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mCustomScrollbar.js"></script>
	   
	<!-- <script src="http://localhost/Gcare/public/js/jquery.js"></script> -->
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.core.js"></script>
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.widget.js"></script>
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.tabs.js"></script>
	 <script>
	$(function() {
		$( "#tabs" ).tabs({
			collapsible: true
		});
		
	});
  
   
</script>
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
   <td> <a href="http://localhost/Gcare/scripts/logout.php">Log out </a></td><tr></table>
    </div>
    <div id="image"><image src='http://localhost/Gcare/public/images/cpanel.png' ></image>
  
    Administrator >> Control Panel</div>
    <div id="controlpanel">
	<div id="tabs">
	<ul>
		<li><a href="#tabs-1" id="tab1">Members</a></li>
		<li><a href="#tabs-2">Administrators</a></li>
		<li><a href="#tabs-3">CEOs</a></li>
	</ul>
	<script>
	$(function($){
        $("#tabs-1").mCustomScrollbar();
        });
	
   	</script>
	<div id="tabs-1">
		
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
	<div id="tabs-2">


<?php

include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$customquery="SELECT * FROM administrators";
$result=mysql_query($customquery);
$Custrow=mysql_fetch_assoc($result);
$queH=mysql_query("SELECT * FROM hotels WHERE hotelid='{$Custrow['hotelId']}'");
$Hrow=mysql_fetch_assoc($queH);
echo"<table id='tcustomers' style=\"text-align:center;border:1px solid #ccc; padding:10px; \">";
echo"<tr bgcolor=#808000><th> Name</th>  <th>Email </th> <th>PhoneNo </th> <th>IdcardNo </th> <th>Hotel Name</th><th>Task1</th></tr>";
do{
    echo "<tr>";
    echo"<td>".$Custrow['name']."</td><td>".$Custrow['email']."</td><td>".$Custrow['phoneno']."</td><td>".$Custrow['nationalid']."</td><td>".$Hrow['name']."</td><td>"."<a href=\"\">Edit</a>&nbsp;&nbsp;&nbsp;<a href=\"\">Delete</a></td>";
    echo "</tr>";
}

while($Custrow=mysql_fetch_assoc($result));
echo"</table>";

?>
	</div>
	<div id="tabs-3">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$customquery1="SELECT * FROM ceos";
$result1=mysql_query($customquery1)or die(mysql_error());
$Custrow1=mysql_fetch_assoc($result1);

echo"<table id='tcustomers' style=\"text-align:center;border:1px solid #ccc; padding:10px; \">";
echo"<tr bgcolor=#808000><th> Name</th>  <th>Email </th> <th>PhoneNo </th><th>Hotel Name</th><th>Task1</th></tr>";
do{
$queH1=mysql_query("SELECT * FROM hotels WHERE hotelid='{$Custrow1['hotelid']}'")or die(mysql_error());
$Hrow1=mysql_fetch_assoc($queH1);
    echo "<tr>";
    echo"<td>".$Custrow1['name']."</td><td>".$Custrow1['email']."</td><td>".$Custrow1['phoneno']."</td><td>".$Hrow1['name']."</td><td>"."<a href=\"\">Edit</a>&nbsp;&nbsp;&nbsp;<a href=\"\">Delete</a></td>";
    echo "</tr>";
}
while($Custrow1=mysql_fetch_assoc($result1));
echo"</table>";
?>
	</div>
</div>

</div>
	
  </div>

 <div id="footer">
   Gcare &nbsp; | &nbsp; 2013
   <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            Terer C. Mercy **** powered by Google.</p>
   </div>
   
    </body>
</html>
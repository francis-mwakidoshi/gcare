
 <html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="http://localhost/Gcare/public/css/user.css" type="text/css" rel="stylesheet"></link>
        <link href="http://localhost/Gcare/public/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="http://localhost/Gcare/public/js/themes/base/jquery.ui.all.css"/>
		<link rel="stylesheet" href="../demos.css"/>
        
       <script src="http://localhost/Gcare/public/js/jquery-ui.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mousewheel.min.js"></script>
       <script src="http://localhost/Gcare/public/js/jquery.mCustomScrollbar.js"></script>
	   
	<script src="http://localhost/Gcare/public/js/jquery.js"></script>
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
		<li><a href="#tabs-1" id="tab1">Comments</a></li>
		
	</ul>
	<script>
	$(function($){
        $("#tabs-1").mCustomScrollbar();
        });
   	</script>
	<div id="tabs-1">
	<style>
	#table td{
	border:1px solid #ccc;
	}
	</style>
		<?php
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$Cque=mysql_query("SELECT * FROM comments");
$Cresult=mysql_fetch_assoc($Cque);

echo "<table style=\"text-align:center;border:1px solid #ccc; padding:10px;\" id=\"table\"><tr bgcolor=#808000>
	 <th>Username</th> <th>HotelName</th> <th>Comment</th></tr>";
do{
$Cque1=mysql_query("SELECT username FROM users WHERE userID='{$Cresult['userID']}'");
$Cresult1=mysql_fetch_assoc($Cque1);
$Cque2=mysql_query("SELECT name FROM hotels WHERE hotelid='{$Cresult['HotelId']}'");
$Cresult2=mysql_fetch_assoc($Cque2);
	echo "<tr><td>".$Cresult1['username']."</td><td>".$Cresult2['name']."</td><td>".$Cresult['Comments']."</td></tr>";
}while($Cresult=mysql_fetch_assoc($Cque));
echo "</table>";
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



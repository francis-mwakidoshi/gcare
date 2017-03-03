<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Tabs - Open on mouseover</title>
	<link rel="stylesheet" href="http://localhost/Gcare/public/js/themes/base/jquery.ui.all.css">
	<script src="http://localhost/Gcare/public/js/jquery.js"></script>
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.core.js"></script>
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.widget.js"></script>
	<script src="http://localhost/Gcare/public/js/ui/jquery.ui.tabs.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<script>
	$(function() {
		$( "#tabs" ).tabs({
			event: "mouseover"
		});
	});
	</script>
</head>
<body>

<div class="demo">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Members</a></li>
		<li><a href="#tabs-2">Administrators</a></li>
		<li><a href="#tabs-3">CEOs</a></li>
	</ul>
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

<a href="http://localhost/Gcare/me.php?view=true">Administrators </a>
<?php
if($_GET['view']){
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
$customquery="SELECT * FROM administrators";
$result=mysql_query($customquery);
$Custrow=mysql_fetch_assoc($result);
echo"<table id='tcustomers' style=\"text-align:center;border:1px solid #ccc; padding:10px; \">";
echo"<tr bgcolor=#808000><th> Name</th>  <th>Email </th> <th>PhoneNo </th> <th>IdcardNo </th> <th>Hotel Name</th><th>Task1</th></tr>";
do{
    echo "<tr>";
    echo"<td>".$Custrow['name']."</td><td>".$Custrow['email']."</td><td>".$Custrow['phoneno']."</td><td>".$Custrow['nationalid']."</td><td>".$Custrow['hotelid']."</td><td>"."<a href=edit1.php?id=".$Custrow['adminId'].">Edit</a>&nbsp;&nbsp;&nbsp;<a href=delete.php?id=".$Custrow['adminId'].">Delete</a></td>";
    echo "</tr>";
}
while($Custrow=mysql_fetch_assoc($result));
echo"</table>";

}
?>
	</div>
	<div id="tabs-3">

	</div>
</div>

</div><!-- End demo -->



<div class="demo-description">
<p>Toggle sections open/closed on mouseover with the <code>event</code> option. The default value for event is "click."</p>
<pre><code>event: 'mouseover'
</code></pre>
</div><!-- End demo-description -->

</body>
</html>

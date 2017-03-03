
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
?>
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
   <td> <a href="http://localhost/Gcare/scripts/logout.php">Log out </a></td></tr></table>
    </div>
    <div id="image"><image src='http://localhost/Gcare/public/images/cpanel.png' ></image>
    <script>
    (function($){
        $(document).ready(function(){
            $("#controlpanel").mCustomScrollbar();
        });
    })(jQuery);
</script>
    Administrator >> Control Panel</div>
    <div id="controlpanel">
		<?php
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/libchart/classes/libchart.php');

$query="SELECT * FROM users WHERE usertypeID='2'AND Country='kenya'";
$result1=mysql_query($query);

$row1=mysql_num_rows($result1);
	


$query="SELECT * FROM users WHERE usertypeID='2'AND Country='Uganda'";
$result2=mysql_query($query);

$row2=mysql_num_rows($result2);


$query="SELECT * FROM users WHERE usertypeID='2'AND Country='tanzania'";
$result3=mysql_query($query);

$row3=mysql_num_rows($result3);
	
$dataset=new XYDataSet();
 
$dataset->addPoint(new Point('kenya',$row1));

$dataset->addPoint(new Point('Uganda',$row2));

$dataset->addPoint(new Point('Tanzania',$row3));

 $chart=new VerticalBarChart();
 $chart->setDataSet($dataset);
 $chart->setTitle('Member Distribution');
 $chart->render('user.png');

?>
<img src="user.png"/>
<table  bordercolor="#ccc" border="1" style="margin-top:5px;">
<tr><td><a href="http://localhost/Gcare/scripts/statistics.php">Piechart</a></td><td><a href="http://localhost/Gcare/scripts/Barchart.php">HorizontalBarChart</a></td><td><a href="http://localhost/Gcare/scripts/Linechart.php"> LineChart</a></td><td><a href="http://localhost/Gcare/scripts/Vbarchart.php">VerticalBarChart</a></td></tr>
</table>
<a href="http://localhost/Gcare/scripts/statisticspdf.php">Generate Report</a>
</div>
</div>
 <div id="footer">
   Gcare &nbsp; | &nbsp; 2013
   <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            Terer C. Mercy **** powered by Google.</p>
   </div>
   </body>
   </html>
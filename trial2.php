<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/libchart/classes/libchart.php');

$query="SELECT * FROM users WHERE usertypeID='2'AND Country='kenya'";
$result=mysql_query($query);

$row1=mysql_num_rows($result);
	


$query="SELECT * FROM users WHERE usertypeID='2'AND Country='Uganda'";
$result=mysql_query($query);

$row2=mysql_num_rows($result);


$query="SELECT * FROM users WHERE usertypeID='2'AND Country='tanzania'";
$result=mysql_query($query);

$row3=mysql_num_rows($result);
echo $row;	




$dataset=new XYDataSet();
 
$dataset->addPoint(new Point('kenya',$row1));

$dataset->addPoint(new Point('Uganda',$row2));

$dataset->addPoint(new Point('Tanzania',$row3));

 $chart=new PieChart();
 $chart->setDataSet($dataset);
 $chart->setTitle('Member Distribution');
 $chart->render('user.png');
?>
<image src="user.png"/>
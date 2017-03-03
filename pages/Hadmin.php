<?php

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
?>


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
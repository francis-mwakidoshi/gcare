<?PHP
session_start();
session_destroy();
header("location:http://localhost/Gcare/index.php");
?>
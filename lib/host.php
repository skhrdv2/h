<?php
date_default_timezone_set("Asia/Bangkok"); 
define("host","localhost");
<<<<<<< HEAD
define("username","sa");
define("password","sa");
=======
define("username","root");
define("password","12345678");
>>>>>>> 1557ceeb4c13a21b3448cf6858f698e60a3b4695
define("db","hrd");
$db_report = mysqli_connect(host, username, password,db); 
$query_report = $db_report ->query("SET NAMES UTF8");
include('onlineuser.php');
?>
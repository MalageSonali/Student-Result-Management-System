<?php
define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME', 'sturms');

//global $con;
$conn = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");
// Check connection
if(!($conn))	echo "Failed to connect MySQL: " .mysqli_connect_error();
?>

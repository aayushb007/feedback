<?php 
ob_start();
 
define ('hostname', 'localhost');
define ('username', 'root');
define ('password', '');
define ('dbname', 'feedback');

$con = mysqli_connect(hostname, username, password, dbname) or die("DB Not connected .");

session_start();

?>
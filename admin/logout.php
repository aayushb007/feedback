<?php ob_start();

include"config.php";

echo $_SESSION['username'];

$_SESSION['username']="";

unset($_SESSION['username']);

session_destroy();

header("Location:login.php");

?>
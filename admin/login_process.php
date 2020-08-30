<?php ob_start();

include("config.php");



date_default_timezone_set("Asia/Kolkata");

 $dd= date('d-m-Y H:i:s'); 

$user_ip=$_SERVER['REMOTE_ADDR'];

$username=$_POST['username'];

$email=$username;
$password=$_POST['password'];

	

  $sql="SELECT * FROM tbl_rights WHERE user_name = '".$username."' AND  password = '".$password."'";

  $result1 = mysqli_query($con,$sql);

     if($row=mysqli_fetch_assoc($result1)) { 
         
        $_SESSION['username']=$username;
        $_SESSION['account_type']=$row['account_type'];
    
    	if($row['account_type']=="Admin") {
        	header("Location:index.php");
        } else if($row['account_type']=="User") {
            header("Location:bazar_time.php");
        }

	} else {

        $states='The username or password are incorrect!';
        header("Location:index.php?status=".$states);
    }

 ?>
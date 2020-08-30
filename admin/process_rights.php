<?php  ob_start();
include("config.php");
$rs='';

          
    $sql = "insert into tbl_rights(user_name,password,account_type) values('".$_POST['user_name']."','".$_POST['password']."','User')";    
    $rs = mysqli_query($con,$sql);  
  



if($rs){
    header("location:rights.php?st=success");
} else {
    header("location:rights.php?st1=success");
}

?>
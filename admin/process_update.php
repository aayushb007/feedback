<?php 
ob_start();
include("config.php");
date_default_timezone_set("Asia/Kolkata");
$dd = date('Y-m-d');

if(isset($_REQUEST['fun']))
{
	 $id = $_REQUEST['fun'];
	 if($id==1) {
	     
	     
        $sql = "select game_id, game_name from tbl_game where game_id not in('111','3') order by game_id";
	 	$rs = mysqli_query($con,$sql);
	 	$rs2 = '';
	 	while($row = mysqli_fetch_array($rs)) {
	 	   
	 	    $sql1 = "select * from tbl_pkboss_master where game_date = '$dd' and game_id = '".$row['game_id']."'";
	 		$rs1 = mysqli_query($con,$sql1);
	 		
	 		$middle_array = str_split($_POST['middle'.$row['game_id']], 1);
	 	    $middle1 = $middle_array[0]; 
	 	    $middle2 = $middle_array[1];
	 		if(mysqli_num_rows($rs1)>0){
	 		$sql2 = "update tbl_pkboss_master set game_digit1 = '".trim($_POST['open'.$row['game_id']])."', game_digit2 = '".trim($_POST['close'.$row['game_id']])."', middle1 = '$middle1', middle2 = '$middle2', game_updated_by = '".$_SESSION['account_type']."', live_flag = '".($_POST['flag'.$row['game_id']])."', loading = '".($_POST['loading'.$row['game_id']])."' where game_date = '$dd' and game_id = '".$row['game_id']."'";
	 		} else {
	 		$sql2 = "insert into tbl_pkboss_master(game_id,game_digit1,game_digit2,middle1,middle2,game_date,game_updated_by,live_flag,loading) values('".$row['game_id']."','".trim($_POST['open'.$row['game_id']])."','".trim($_POST['close'.$row['game_id']])."','$middle1','$middle2','".$dd."','".$_SESSION['account_type']."','".trim($_POST['flag'.$row['game_id']])."','".trim($_POST['loading'.$row['game_id']])."')";
	 		}
	 		$rs2 = mysqli_query($con, $sql2);
	 	}
	 	if($rs2){
	 	    echo "Updated";    
	 	} else {
	 	    echo "Not Updated.... Some Error..!!";
	 	}
	 } else if($id==2) {
	     
	    $sql = "select * from tbl_silver where silver_dt = '$dd'";
	 	$rs = mysqli_query($con,$sql);
	 	$count = mysqli_num_rows($rs);
	 	 
	 	if($count>0){
	 	     
	 	    $hh = substr($_POST['time'],0,2);
            $hr = substr($_POST['time'],6,2);
            $ht = $hh.':00 '.$hr;
    
            $sql2 = "update tbl_silver set three_digit = '".$_POST['sopen']."', digit = '".$_POST['smiddle']."', silver_dt='".$dd."' where time = '$ht' and silver_dt = '$dd'";
            $rs2 = mysqli_query($con, $sql2);
            
	 	} else {
	 	     
	 	    $start_time = 10;
            $end_time  = 19;
            
            for ($time = $start_time; $time <= $end_time; $time++) {
                $tt = $time . ":00\n";
                $silver_time = date('h:i a',strtotime($tt));
                
                $sql2 = "insert into tbl_silver(time,silver_dt) values('$silver_time','".$dd."')";
                $rs2 = mysqli_query($con, $sql2);
            }
            
            $hh = substr($_POST['time'],0,2);
            $hr = substr($_POST['time'],6,2);
            $ht = $hh.':00 '.$hr;
    
            $sql2 = "update tbl_silver set three_digit = '".$_POST['sopen']."', digit = '".$_POST['smiddle']."', silver_dt='".$dd."' where time = '$ht' and silver_dt = '$dd'";
            $rs2 = mysqli_query($con, $sql2);
	 	}
	 	if($rs2){
	 	    echo "Updated";    
	 	} else {
	 	    echo "Not Updated.... Some Error..!!";
	 	}
	}
}


?>
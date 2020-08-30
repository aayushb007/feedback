<?php
ob_start();
include("config.php");

if(isset($_POST['update_button'])){
    
    echo $sql = "UPDATE tbl_game SET game_name = '".$_POST['bazar_name']."',game_opentime = '".$_POST['open_time']."',game_closetime = '".$_POST['close_time']."' WHERE game_id = '".$_POST['game_id']."'";
    $rs = mysqli_query($con,$sql);
    
    if($rs){
        header("location:display_bazar.php?up=updated");
    } else {
        header("location:add_bazar.php?fl=nosuccess");
    }
    
} else {
    

    $sql = "insert into tbl_game (game_name,game_added_for,game_opentime,game_closetime) values('".$_POST['bazar_name']."','admin(Admin)','".$_POST['open_time']."','".$_POST['close_time']."')";

    $rs = mysqli_query($con,$sql);
    
    if($rs){
        header("location:display_bazar.php?st=inserted");
    } else {
        header("location:add_bazar.php?fl=nosuccess");
    }

}
?>
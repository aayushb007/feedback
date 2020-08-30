<?php include("include/header.php"); 
date_default_timezone_set("Asia/Kolkata");
$dd = date('Y-m-d');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search Result
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Game Time</a></li>
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Upadate Game Data [<?php echo date('d-m-Y')?>]</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Game Name</th>
                  <th>Open</th>
                  <th>Middle</th>
                  <th>Action</th>
                </tr>
                <?php
                
                $sql1 = "select * from tbl_silver where silver_dt = '$dd' order by silver_id asc";
                
                $rs1 = mysqli_query($con,$sql1);
                $count = mysqli_num_rows($rs1);
                 
                  while($row1 = mysqli_fetch_array($rs1)){  ?>
                    <form action="edit_silver.php" method="post" name="form">
                        <tr>
                          <td><input type='hidden' name="time" id="time" value="<?php echo $row1['time']?>" style="width: 99px;"><?php echo $row1['time'] ?></td>
                          <td><input type='text' name="sopen" id="sopen" value="<?php echo $row1['three_digit']?>" style="width: 99px;"></td>
                          <td><input type='text' name="smiddle" id="smiddle" value="<?php echo $row1['digit']?>" style="width: 99px;"></td>
                          <td><input type="submit" name="submit" value="update" /></td>
                        </tr>
                    </form>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

  </div>
 <?php include("include/footer.php"); ?>
 
 
 <?php 
 
 if(isset($_POST['submit'])){
 
    $sql1 = "update tbl_silver set three_digit='".$_POST['sopen']."', digit ='".$_POST['smiddle']."' where time='".$_POST["time"]."' and silver_dt ='$dd'";
    $query = mysqli_query($con, $sql1);
    
    if($query){
        header("location:edit_silver.php?st=success");
    } else {
        header("location:edit_silver.php?nst=not_success");
    }
     
 }
 
 
if(isset($_GET['st'])){ ?>
    <script> alert("Updated"); </script>
<?php } else { ?>
    <script> alert("Not Updated.... Some Error..!!"); </script>
<?php } ?>
 
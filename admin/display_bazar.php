<?php include("include/header.php"); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Display Bazar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Modify Data</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Modify Bazar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Bazar Name</th>
                  <th>Open Time</th>
                  <th>Close Time</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php   
                $sql = "select * from tbl_game order by game_id desc";
                $rs = mysqli_query($con,$sql);
                $i = 1;
                while($row = mysqli_fetch_array($rs)){
                ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['game_name'];?></td>
                  <td><?=$row['game_opentime']?></td>
                  <td><?=$row['game_closetime']?></td>
                  <td><a href="add_bazar.php?game_id=<?=$row['game_id']?>" >Edit</a></td>
                </tr>
                <?php $i++; } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
 <?php include("include/footer.php"); ?>
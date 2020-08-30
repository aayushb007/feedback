<?php include("include/header.php"); ?>
<style>

label {
    display: block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    padding: 5px 11px;
}

</style>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Rights
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Rights</a></li>
      </ol>
    </section>


    <!-- Main content -->
    <form action='process_rights.php' method="POST">
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Create User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-12">
        
         
              </div> 
              <div  class="form-group" >   <input type="submit" class='btn btn-primary' value="Give Rights" name="btn_rights"> </div>
            </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
<?php include("include/footer.php");

if(isset($_GET['st'])){ ?> <script> alert("Create User & Given Rights"); </script> <?php } else if(isset($_GET['st1'])) { ?> <script> alert("Not Success..!! Some Error.."); </script> <?php } ?>
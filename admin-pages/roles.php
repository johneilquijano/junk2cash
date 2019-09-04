<!DOCTYPE html>
<?php include '../template/header.php'; ?>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '../template/admin-main-header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include '../template/admin-main-sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Roles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">

                <div class="callout callout-info">
                  <h4>Please Fill Up The Fields</h4>
                </div>

                  <label for="exampleInputEmail1">Role</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Role Name">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter Role Description"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Roles & Description</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-hover">
                <tr>
                  <td>Resident</td>
                  <td>Description</td>
                </tr>
                <tr>
                  <td>Collector</td>
                  <td>Description</td>
                </tr>
                <tr>
                  <td>Facilitator</td>
                  <td>Description</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include '../template/footer.php'; ?>
<?php include '../template/control-sidebar.php'; ?>
</div>
<!-- ./wrapper -->
<?php include '../template/footer-script.php'; ?>
</body>
</html>
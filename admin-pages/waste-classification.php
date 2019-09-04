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
              <h3 class="box-title">Add Waste Classification</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">

                <div class="callout callout-info">
                  <h4>Please Fill Up The Fields</h4>
                </div>

                  <label for="exampleInputEmail1">Waste Classification Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Waste Classification Name">
                </div>
                <div class="form-group">
                  <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                  <select class="form-control">
                    <option>Select Waste Category..</option>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload waste classification image size: 355 x 222</label>
                  <input type="file" id="exampleInputFile">
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
              <h3 class="box-title">Classifcations of Waste</h3>

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
                  <td>Household Waste</td>
                  <td>
                    <p>Newspapers</p>
                    <p>Plastic Bottles</p>
                  </td>
                </tr>
                <tr>
                  <td>Special Waste</td>
                  <td>
                    <p>Paint Cans</p>
                    <p>Pesticide Cans</p>
                  </td>
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
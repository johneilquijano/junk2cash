<!DOCTYPE html>
<html>
<?php include '../template/user-pages-header.php'; ?>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include '../template/junkshop-navigation.php'; ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <img src="../dist/img/noob4.jpg" alt="..." class="img-thumbnail">
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <ul>
                      <li>Coca Cola Bottle
                        <ul>
                          <li>Category: Plastics</li>
                          <li>Time remaining: 6days</li>
                          <li>Quantity: 20pcs</li>
                          <li>Date Autioned: 2days ago</li>
                        </ul>
                      </li>
                    </ul>

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">More Info</button>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

              <div class="col-md-4">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <img src="../dist/img/noob4.jpg" alt="..." class="img-thumbnail">
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <ul>
                      <li>Coca Cola Bottle
                        <ul>
                          <li>Category: Plastics</li>
                          <li>Time remaining: 6days</li>
                          <li>Quantity: 20pcs</li>
                          <li>Date Autioned: 2days ago</li>
                        </ul>
                      </li>
                    </ul>

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">More Info</button>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

              <div class="col-md-4">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <img src="../dist/img/noob4.jpg" alt="..." class="img-thumbnail">
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <ul>
                      <li>Coca Cola Bottle
                        <ul>
                          <li>Current Bidd Price: $20.00</li>
                          <li>Category: Plastics</li>
                          <li>Time remaining: 6days</li>
                          <li>Quantity: 20pcs</li>
                          <li>Date Autioned: 2days ago</li>
                        </ul>
                      </li>
                    </ul>

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">More Info</button>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>

            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="../dist/img/noob4.jpg" alt="..." class="img-thumbnail">
                      </div>
                      <div class="col-md-6">
                        <div class="panel-heading">
                          <h3 class="panel-title">Coca Cola Plactic Bottle</h3>
                        </div> 
                        <div class="panel-body">
                          <ul>
                            <li>Category: Plastics</li>
                            <li>Time remaining: 6days</li>
                            <li>Quantity: 20pcs</li>
                            <li>Date Autioned: 2days ago</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Enter Your Highest Bid</strong></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0.00">
                            </div>
                          </div>
                        </div>  
                      </div>
                      <div class="modal-footer">
                        <button type="cancel" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Place Bid</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                    <!-- /.modal-dialog -->
              </div>
          <!-- /.modal -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

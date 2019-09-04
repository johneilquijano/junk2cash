<!DOCTYPE html>
<html>
<?php include '../template/user-pages-header.php'; ?>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include '../template/facilitator-navigation.php'; ?>
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
            <h3 class="box-title"><strong>Auctioned Items</strong></h3>
            <div class="dropdown pull-right">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Category 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Household Waste</a></li>
                <li><a href="#">Special Waste</a></li>
                <li><a href="#">Recyclable Waste</a></li>
              </ul>
            </div>
          </div>

          <div class="box-body">
          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-add-item"><i class="fa fa-plus-circle"></i> Add Items</button>
            </div>
          </div>
          
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

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-info">More Info</button>
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

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-info">More Info</button>
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

                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-info">More Info</button>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

        <!-- modal add item -->
        <div class="modal fade" id="modal-add-item">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputFile">Item Image</label>
                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Upload item image size: 355 x 222</p>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Enter item name</strong></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Item name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Enter item category</strong></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Item category">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Enter Quantity</strong></label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0.00">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <!-- modal info -->
        <div class="modal fade" id="modal-info">
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
                          <h3 class="panel-title"><strong>Number of Bidders: 5</strong></h3>
                        </div> 
                        <div class="panel-body">
                        <li><strong>Highest Bidder: Christian ***</strong></li>
                          <ol>
                            <li>Kobe ***</li>
                            <li>Lebron ******</li>
                            <li>Stephen ***</li>
                            <li>Kyrie ******</li>
                          </ol>
                        <li><strong>Highest Bidd: $50.00</strong></li>
                        </div>
                      </div>
                    </div> 
                      </div>
                      <div class="modal-footer">
                        <button type="cancel" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                    <!-- /.modal-dialog -->
              </div>
        <!-- /.modal -->
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

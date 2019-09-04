<!DOCTYPE html>
<html>
<?php include '../template/user-pages-header.php'; ?>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include '../template/collector-navigation.php'; ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Waste Segregation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Waste Segregation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Uncollected Waste</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Residents of sitio Nakada</h3>

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
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th>ID</th>
                        <th>Resident Name</th>
                        <th>Date</th>
                        <th>Select Violation</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-violation">Violations</button></td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-check">Check Segregated Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">Violations</button></td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Check Segregated Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">Violations</button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Check Segregated Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Violations</button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-check">Check Segregated Garbages</button>
                        </td>
                      </tr>
                    </table>
                  </div>

                  <!-- violation modal -->
                  <div class="modal fade" id="modal-violation">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Violations</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Violation Committed</label>
                            <select class="form-control">
                              <option>Select Violation</option>
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
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

                  <!-- check segregated garbage modal -->
                  <div class="modal fade" id="modal-check">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Resident segregated garbages</h4>
                        </div>
                        <div class="modal-body">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../dist/img/metal.png" alt="user image">
                                <span class="username">
                                  <a href="#">Metals</a>
                                  <span class="label label-success pull-right">20</span>
                                </span>
                            <span class="description">Date throwed - 7:30 PM today</span>
                          </div>
                          <hr>
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../dist/img/glass-bottle.png" alt="user image">
                                <span class="username">
                                  <a href="#">Glass Bottles</a>
                                  <span class="label label-warning pull-right">20</span>
                                </span>
                            <span class="description">Date throwed - 7:30 PM today</span>
                          </div>
                          <hr>
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../dist/img/newspaper.png" alt="user image">
                                <span class="username">
                                  <a href="#">Newspapers</a>
                                  <span class="label label-info pull-right">20</span>
                                </span>
                            <span class="description">Date throwed - 7:30 PM today</span>
                          </div>
                          <hr>
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../dist/img/plastic.png" alt="user image">
                                <span class="username">
                                  <a href="#">Plastic Bottles</a>
                                  <span class="label label-danger pull-right">20</span>
                                </span>
                            <span class="description">Date throwed - 7:30 PM today</span>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Collect Garbages</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
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

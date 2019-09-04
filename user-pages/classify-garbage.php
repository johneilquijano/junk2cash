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
            <h3 class="box-title">Collected garbages of Brgy. Daliao</h3>
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-add-item"><i class="fa fa-check"></i> Overall segregated garbages</button>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"></h3>

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
                        <th>Sitio</th>
                        <th>Collector</th>
                        <th>Date Collected</th>
                        <th>Check Collected Garbages</th>
                      </tr>
                      <tr>
                        <td>Nakada</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-check">Check Collected Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>Dona Manuela</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Check Collected Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>Dona Rosa</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Check Collected Garbages</button>
                        </td>
                      </tr>
                      <tr>
                        <td>San Nicolas</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td>
                          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-check">Check Collected Garbages</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                  
                  <!-- Total garbages collected modal -->
                  <div class="modal fade" id="modal-add-item">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title"><strong>Overall collected garbages from collectors</strong></h4>
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
                          <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>

                  <!-- check collected garbage modal -->
                  <div class="modal fade" id="modal-check">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title"><strong>Total garbages collected</strong></h4>
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
                          <button type="button" class="btn btn-success">Confirm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
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

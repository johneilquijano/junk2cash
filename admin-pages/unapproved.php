<!DOCTYPE html>
<?php include '../template/header.php'; 
      include '../api/functions.php';
?>

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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Unaproved Users</b></h3>

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
                  <th>Application #</th>
                  <th>Precint #</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>01</td>
                  <td>John Doe</td>
                  <td>123 Main Street</td>
                  <td>Resident</td>
                  <td><span class="label label-danger">Unapproved</span></td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Default Modal</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
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
                    <!-- /.modal -->
                  </td>
                </tr>
                <tr>
                  <td>184</td>
                  <td>02</td>
                  <td>Alexander Pierce</td>
                  <td>33 barangay 51, Davao City</td>
                  <td>Collector</td>
                  <td><span class="label label-danger">Unapproved</span></td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Default Modal</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
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
                    <!-- /.modal -->
                  </td>
                </tr>
                <tr>
                  <td>185</td>
                  <td>03</td>
                  <td>Bob Doe</td>
                  <td>69 street, DC</td>
                  <td>Facilitator</td>
                  <td><span class="label label-danger">Unapproved</span></td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Default Modal</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
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
                    <!-- /.modal -->
                  </td>
                </tr>
                <tr>
                  <td>186</td>
                  <td>04</td>
                  <td>Mike Doe</td>
                  <td>123 broadway</td>
                  <td>Junkshop Owner</td>
                  <td><span class="label label-danger">Unapproved</span></td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Default Modal</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
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
                    <!-- /.modal -->
                  </td>
                </tr>
                
                <!-- query starts-->
                <?php 


                $sql= "SELECT user.id as uid, app_no, precint_no, firstname,middlename, lastname, address_city,
                address_barangay, address_street,user_role.role_id as roleid, role.name as user_role, verified
                FROM user  
                INNER JOIN user_role ON user.id = user_role.id 
                INNER JOIN role ON user_role.role_id = role.id 
                WHERE role.id != 1 
                AND verified = 0
                ORDER BY uid
                DESC";

                $result = mysqli_query($mysqli,$sql);
                if (mysqli_num_rows($result) > 0) {        
                  while($row = mysqli_fetch_assoc($result)) {

                    $id = $row['uid'];
                    $name = $row['lastname'].', '.$row['firstname'].' '.$row['middlename'];
                    $address = $row['address_street'].' '.$row['address_barangay'].' '.$row['address_city'];
                    $approved = $row['verified'];
                    if($approved == 0){
                      $approved = '<span class="label label-danger">Unapproved</span>';
                    }else{
                      $approved = '<span class="label label-success">Aprroved</span>';
                    }
                                               
                    $myrole = getUserRole($row['roleid']);

                    echo '<tr>';
                    echo '<td>'.$row['app_no'].'</td>';
                    echo '<td>'.$row['precint_no'].'</td>';
                    echo '<td>'.$name.'</td>';
                    echo '<td>'.$address.'</td>';
                    echo '<td>'.$myrole.'</td>';
                    echo '<td>'.$approved.'</td>';
                    echo '<td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                        <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Default Modal</h4>
                              </div>
                              <div class="modal-body">
                                <p>One fine body&hellip;</p>
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
                        <!-- /.modal -->
                      </td>';
                    echo '</tr>';

                  } 
                }
                ?>
  
                <!-- query ends-->

              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
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
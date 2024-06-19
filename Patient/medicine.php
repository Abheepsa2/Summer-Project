
<?php 
include 'registration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- /* Theme style */
     -->

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

<link rel="stylesheet" href="dist/js/jquery_confirm/jquery-confirm.css">
 

<link rel="stylesheet" href="dist/css/default.css" />

 <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <title>Medicine Details</title>

</head>
<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
<!-- php   include 'sidebar.php'; -->

   <!-- include './config/sidebar.php';   -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>PERSONAL INFORMATION</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
            <h3 class="card-title">Health Status</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- best practices-->
            <form method="post">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <label>Select Patient</label>
                  <select id="patient" name="patient" class="form-control form-control-sm rounded-0" 
                  required="required">
                 
                </select>
              </div>


              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                <div class="form-group">
                  <label> Doctor Visit Date</label>
                  <div class="input-group date" 
                  id="visit_date" 
                  data-target-input="nearest">
                  <input type="text" class="form-control form-control-sm rounded-0 datetimepicker-input" data-target="#visit_date" name="visit_date" required="required" data-toggle="datetimepicker" autocomplete="off"/>
                  <div class="input-group-append" 
                  data-target="#visit_date" 
                  data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </div>
          


          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
            <div class="form-group">
              <label>Next Visit Date</label>
              <div class="input-group date" 
              id="next_visit_date" 
              data-target-input="nearest">
              <input type="text" class="form-control form-control-sm rounded-0 datetimepicker-input" data-target="#next_visit_date" name="next_visit_date" data-toggle="datetimepicker" autocomplete="off"/>
              <div class="input-group-append" 
              data-target="#next_visit_date" 
              data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix">&nbsp;</div>

      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <label>BP</label>
        <input id="bp" class="form-control form-control-sm rounded-0" name="bp" required="required" />
      </div>
      
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <label>Weight</label>
        <input id="weight" name="weight" class="form-control form-control-sm rounded-0" required="required" />
      </div>

      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
        <label>Disease</label>
        <input id="disease" required="required" name="disease" class="form-control form-control-sm rounded-0" />
      </div>


    </div>


  <div class="clearfix">&nbsp;</div>
  <div class="row table-responsive">
    <table  border="1"id="medication_list" class="table table-striped table-bordered">
      <colgroup>
        <col width="10%">
        <col width="50%">
        <col width="10%">
        <col width="10%">
        <col width="15%">
        <col width="5%">
      </colgroup>
      <thead class="bg-primary">
        <tr>
          <th>S.No</th>
          <th> Doctor Visit Date</th>
          <th>Next Visit Date</th>
          <th>BP</th>
          <th>WEIGHT</th></th>
          <th>DISEASE</th>
        </tr>
      </thead>

      
    </table>
  </div>

  <div class="clearfix">&nbsp;</div>
  <div class="row">
    <div class="col-md-10">&nbsp;</div>
    <div class="col-md-2">
      <button type="submit" id="submit" name="submit" 
      class="btn btn-primary btn-sm btn-flat btn-block">Save</button>
    </div>
  </div>
</form>

</div>

</div>


</section>

</div>
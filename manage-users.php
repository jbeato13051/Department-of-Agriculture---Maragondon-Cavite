<?php 
   session_start();
   include "config.php";
   if (isset($_SESSION['UserName']) && isset($_SESSION['ID'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="dist/img/da-logo.svg.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>User Accounts</title>
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
</head>

<body>
<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">
<!-- Top Navbar -->
<?php if ($_SESSION['UserType'] == 'Admin') {?>
<!-- For Admin -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->

<!-- Main Content -->
<div class="hk-pg-wrapper">

<nav class="hk-breadcrumb" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <label style="color: black"> Menu </label>
</li>
<li class="breadcrumb-item active" aria-current="page">
  <label style="color: gray"> User Accounts </label>
</li>
</ol>
</nav>
            <!-- Container -->
<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">
<div class="row">
<div class="col-xl-12">
<section class="hk-sec-wrapper border border-info">
    
<div class="hk-pg-header">
<h4 class="hk-pg-title" style="color: black" align="center">
<span class="pg-title-icon">
<span class="feather-icon"></span>
<i class="ion ion-ios-person" style="color: black"></i>
</span>User Accounts</h4>
<div class="hk-pg-title">
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#adduser">
<i class="fa fa-plus">&nbsp;</i>ADD</button>&nbsp;
<?php include 'add-user-modal.php'; ?>
<a href="recyclebin-user.php">
<button type="button" class="btn btn-outline-danger">
<i class="fa fa-trash">&nbsp;</i>Recycle Bin</button>
</a>
</div>
</div>

<div class="row">
<div class="col-sm">
<div class="table-wrap">
<table id="example" class="table table-hover w-100 display nowrap">
<thead>
<tr>
<th>Action</th>
<th>User Type</th>
<th>Username</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mobile Number</th>
<th>Email</th>
<th>Reg. Date</th>
<th>Last Update</th>
</tr>
</thead>
<tbody>


<?php
$query=mysqli_query($con,"SELECT * FROM tblusers ORDER BY ID DESC");
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td>
<button type="button" class="btn btn-outline-info icon-eye" data-toggle="modal" data-target="#viewuser<?php echo $row['ID'];?>"></button>
<button type="button" class="btn btn-outline-success icon-pencil" data-toggle="modal" data-target="#edituser<?php echo $row['ID'];?>"></button>
<button type="button" class="btn btn-outline-danger icon-trash" data-toggle="modal" data-target="#deleteuser<?php echo $row['ID'];?>"></button>
</td>
<td><?php echo $row['UserType'];?></td>
<td><?php echo $row['UserName'];?></td>
<td><?php echo $row['FirstName'];?></td>
<td><?php echo $row['LastName'];?></td>
<td><?php echo $row['MobileNumber'];?></td>
<td><?php echo $row['Email'];?></td>
<td><?php echo $row['Regdate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
</tr>
<?php 
    include 'edit-user-modal.php';
    include 'delete-user-modal.php';
    include 'view-user-modal.php';
} ?>
</tbody>
</table>
</div>
</div>
</div>
</section>

</div>
</div>

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total User Accounts</h4>
<div class="card-body" style="height:40vh">
<canvas id="UserChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>

<?php }else if ($_SESSION['UserType'] == 'Employee'){ ?>
<!-- FOR employee -->
<?php }else{ ?>
<!-- FOR farmers_aide -->
<?php }?>
<footer class="text-center bg-orange">
  <!-- Copyright -->
  <div class="text-right text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
  <!-- Copyright -->
</footer>
</div>

    <!--CHARTS--->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        <?php include 'chart-users.php'; ?>
        const User_data = document.getElementById('UserChart');

          new Chart(User_data, {
            type: 'line',
            data: {
              labels: <?php echo json_encode($utype); ?>,
              datasets: [{
                label: 'Total Number',
                data: <?php echo json_encode($totalamountofut); ?> ,
                borderWidth: 1
              }]
            }
          });
    </script>
    <!--END CHARTS--->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="dist/js/init.js"></script>

    <script src="dist/js/custom.js"></script>

    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    <script src="dist/js/validation-data.js"></script>

</body>
</html>
<?php }else{
    header("Location: index.php");
} ?>
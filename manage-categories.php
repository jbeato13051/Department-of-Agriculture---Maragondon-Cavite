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

    <title>Categories</title>
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
<!-- HK Wrapper --><div class="hk-wrapper hk-vertical-nav">
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
  <label style="color: gray"> Categories</label>
</li>
</ol>
</nav>
            <!-- Container -->
<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">
                <!-- Row -->
<div class="row">
<div class="col-xl-12">
<section class="hk-sec-wrapper border border-info">

<div class="hk-pg-header">
<h4 class="hk-pg-title" style="color: black">
<span class="pg-title-icon">
<span class="feather-icon"></span>
<i class="ion ion-ios-bookmark" style="color: black"></i>
</span>Categories</h4>
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus">&nbsp;</i>ADD</button>
<?php  include 'add-category-modal.php'; ?>
</div>

<div class="row">
<div class="col-sm">
<div class="table-wrap">
<table id="example" class="table table-hover w-100 display nowrap">
<thead>
<tr>
<th>Action</th>
<th>Category</th>
<th>Posting Date</th>
<th>Last Update</th>
</tr>
</thead>
<tbody>
<?php
$query=mysqli_query($con,"SELECT * FROM tblcategory ORDER BY id DESC");
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td>
<button type="button" class="btn btn-outline-success icon-pencil" data-toggle="modal" data-target="#editcategory<?php echo $row['id'];?>"></button>
<button type="button" class="btn btn-outline-danger icon-trash" data-toggle="modal" data-target="#deletecategory<?php echo $row['id'];?>"></button>
</td>
<td><?php echo $row['CategoryName'];?></td>
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
</tr>
<?php 
    include 'edit-category-modal.php';
    include 'delete-category-modal.php';
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
<div class="col-xl-12">

<div class="row">

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Harvested per Category</h4>
<div class="card-body">
<canvas id="HPCChart"></canvas>
</div>
</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Damaged per Category</h4>
<div class="card-body">
<canvas id="DPCChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>
<!-- /Row -->
</div>
<!-- /Container -->
</div>
<!-- /Main Content -->
<?php }else if ($_SESSION['UserType'] == 'Employee'){ ?>
<!-- FOR employee -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar_employee.php');
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
  <label style="color: gray"> Categories</label>
</li>
</ol>
</nav>
            <!-- Container -->
<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">
                <!-- Row -->
<div class="row">
<div class="col-xl-12">
<section class="hk-sec-wrapper border border-info">

<div class="hk-pg-header">
<h4 class="hk-pg-title" style="color: black">
<span class="pg-title-icon">
<span class="feather-icon"></span>
<i class="ion ion-ios-bookmark" style="color: black"></i>
</span>Categories</h4>
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus">&nbsp;</i>ADD</button>
<?php  include 'add-category-modal.php'; ?>
</div>

<div class="row">
<div class="col-sm">
<div class="table-wrap">
<table id="example" class="table table-hover w-100 display nowrap">
<thead>
<tr>
<th>Action</th>
<th>Category</th>
<th>Posting Date</th>
<th>Last Update</th>
</tr>
</thead>
<tbody>
<?php
$query=mysqli_query($con,"SELECT * FROM tblcategory ORDER BY id DESC");
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td>
<button type="button" class="btn btn-outline-success icon-pencil" data-toggle="modal" data-target="#editcategory<?php echo $row['id'];?>"></button>
<button type="button" class="btn btn-outline-danger icon-trash" data-toggle="modal" data-target="#deletecategory<?php echo $row['id'];?>"></button>
</td>
<td><?php echo $row['CategoryName'];?></td>
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
</tr>
<?php 
    include 'edit-category-modal.php';
    include 'delete-category-modal.php';
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
<div class="col-xl-12">

<div class="row">

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Harvested per Category</h4>
<div class="card-body">
<canvas id="HPCChart"></canvas>
</div>
</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Damaged per Category</h4>
<div class="card-body">
<canvas id="DPCChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>
<!-- /Row -->
</div>
<!-- /Container -->
</div>
<!-- /Main Content -->
<?php }else{ ?>
<!-- FOR farmers_aide -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar_farmers_aide.php');
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
  <label style="color: gray"> Categories</label>
</li>
</ol>
</nav>
            <!-- Container -->
<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">
                <!-- Row -->
<div class="row">
<div class="col-xl-12">
<section class="hk-sec-wrapper border border-info">

<div class="hk-pg-header">
<h4 class="hk-pg-title" style="color: black">
<span class="pg-title-icon">
<span class="feather-icon"></span>
<i class="ion ion-ios-bookmark" style="color: black"></i>
</span>Categories</h4>
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus">&nbsp;</i>ADD</button>
<?php  include 'add-category-modal.php'; ?>
</div>

<div class="row">
<div class="col-sm">
<div class="table-wrap">
<table id="example" class="table table-hover w-100 display nowrap">
<thead>
<tr>
<th>Action</th>
<th>Category</th>
<th>Posting Date</th>
<th>Last Update</th>
</tr>
</thead>
<tbody>
<?php
$query=mysqli_query($con,"SELECT * FROM tblcategory ORDER BY id DESC");
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td>
<button type="button" class="btn btn-outline-success icon-pencil" data-toggle="modal" data-target="#editcategory<?php echo $row['id'];?>"></button>
<button type="button" class="btn btn-outline-danger icon-trash" data-toggle="modal" data-target="#deletecategory<?php echo $row['id'];?>"></button>
</td>
<td><?php echo $row['CategoryName'];?></td>
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
</tr>
<?php 
    include 'edit-category-modal.php';
    include 'delete-category-modal.php';
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
<div class="col-xl-12">

<div class="row">

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Harvested per Category</h4>
<div class="card-body">
<canvas id="HPCChart"></canvas>
</div>
</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total Damaged per Category</h4>
<div class="card-body">
<canvas id="DPCChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>
<!-- /Row -->
</div>
<!-- /Container -->
</div>
<!-- /Main Content -->
<?php }?>
<footer class="text-center bg-orange">
  <!-- Copyright -->
  <div class="text-right text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
  <!-- Copyright -->
</footer>
</div>
<!-- /HK Wrapper -->
    <!--CHARTS--->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        <?php include 'chart-harvestedpercategories.php'; ?>
        const HPC_data = document.getElementById('HPCChart');

          new Chart(HPC_data, {
            type: 'doughnut',
            data: {
              labels: <?php echo json_encode($CategoryName); ?>,
              datasets: [{
                label: 'Total Average kg per bag',
                data: <?php echo json_encode($totalsum); ?> ,
                borderWidth: 1
              }]
            }
          });

        <?php include 'chart-damagedpercategories.php'; ?>
        const DPC_data = document.getElementById('DPCChart');

          new Chart(DPC_data, {
            type: 'doughnut',
            data: {
              labels: <?php echo json_encode($DamageCategoryName); ?>,
              datasets: [{
                label: 'Total Average kg per bag',
                data: <?php echo json_encode($totalsumofdamage); ?> ,
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
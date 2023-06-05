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
    <title>Report Harvested Products - Recycle Bin</title>
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
<?php }else if ($_SESSION['UserType'] == 'Employee'){ ?>
<!-- FORE employee -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar_employee.php');
?>
<?php }else{ ?>
<!-- FORE farmers_aide -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar_farmers_aide.php');
?>
<?php }?>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->

<!-- Main Content -->
<div class="hk-pg-wrapper">

<nav class="hk-breadcrumb" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <label style="color: black"> Menu </label>
</li>
<li class="breadcrumb-item" aria-current="page">
  <label style="color: black"> Report Harvested Products </label>
</li>
<li class="breadcrumb-item active" aria-current="page">
  <label style="color: gray"> Recycle Bin </label>
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
<i class="ion ion-ios-trash" style="color: black"></i>
</span>Recycle Bin</h4>
<div class="hk-pg-title">
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deletereportharvestedallrecyclebinmodal">
<i class="fa fa-trash">&nbsp;</i>Delete All</button>
<?php include 'delete-report-harvested-allrecyclebin-modal.php'; ?>
</div>
</div>

<div class="row">
<div class="col-sm">
<div class="table-wrap">
<table id="example" class="table table-hover w-100 display nowrap">
<thead>
<tr>
<th>Action</th>
<th>RSBSA Number</th>
<th>Category</th>
<th>Product</th>
<th>Area Harvested(ha)</th>
<th>Gross Harvest(bag)</th>
<th>Average weight per bag(kg)</th>
<th>Posting Date</th>
<th>Last Update</th>
<th>Date Deleted</th>
</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"SELECT * FROM tblreportharvested_backup ORDER BY id DESC");
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td>
<button type="button" class="btn btn-outline-primary icon-refresh" data-toggle="modal" data-target="#restorerecyclebinreportharvested<?php echo $row['id'];?>"></button>
<button type="button" class="btn btn-outline-danger icon-trash" data-toggle="modal" data-target="#deleterecyclebinreportharvested<?php echo $row['id'];?>"></button>
</td>
<td><?php echo $row['RSBSA_Number'];?></td>
<td><?php echo $row['CategoryName'];?></td>
<td><?php echo $row['ProductName'];?></td>
<td><?php echo $row['AreaHarvested_hectares'];?></td>
<td><?php echo $row['GrossHarvest_bag'];?></td>
<td><?php echo $row['AverageWeightPerBag_kg'];?></td>
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
<td><?php echo $row['date_deleted'];?></td>
</tr>
<?php 
  include 'delete-report-harvested-recyclebin-modal.php';
  include 'restore-report-harvested-recyclebin-modal.php';
} ?>
</tbody>
</table>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
</div>
<footer class="text-right bg-orange">
  <div class="text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
</footer>
</div>
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
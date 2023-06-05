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
    <title>Home</title>
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

<?php if ($_SESSION['UserType'] == 'Admin') {?>
<!-- For Admin -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>

<div class="hk-pg-wrapper">

<nav class="hk-breadcrumb" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <label style="color: black"> Menu </label>
</li>
<li class="breadcrumb-item active" aria-current="page">
  <label style="color: gray"> Home </label>
</li>
</ol>
</nav>

<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">

<div class="row">
<div class="col-xl-12">
<div class="hk-row">

<?php
$query=mysqli_query($con,"select ID from tblusers");
$listedcat=mysqli_num_rows($query);
?>
<div class="col-lg-4 col-md-6">
<a href="manage-users.php">
<div class="card card-sm text-white" style="background-color: darkmagenta">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of User Account</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedcat;?></span>
<small class="d-block">Listed Categories</small>
</div>
</div>
</div>
</a>
</div>
                            

<?php
$query=mysqli_query($con,"select id from tblcategory");
$listedcat=mysqli_num_rows($query);
?>
<div class="col-lg-4 col-md-6">
<a href="manage-categories.php">
<div class="card card-sm text-white" style="background-color: royalblue">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Categories</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedcat;?></span>
<small class="d-block">Listed Categories</small>
</div>
</div>
</div>
</a>
</div>
                            
<?php
$ret=mysqli_query($con,"select id from tblfarmer");
$listedcomp=mysqli_num_rows($ret);
?>
<div class="col-lg-4 col-md-6">
<a href="manage-farmers.php">
<div class="card card-sm bg-warning text-white">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Farmers</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><span class="counter-anim"><?php echo $listedcomp;?></span></span>
<small class="d-block">Listed Farmers</small>
</div>
</div>
</div>
</a>
</div>

</div>

<div class="hk-row">

<?php
$sql=mysqli_query($con,"select id from tblreportharvested");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-report-harvested.php">
<div class="card card-sm bg-success text-white" style="height: 145px">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Report Harvested</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Listed Report Harvest</small>
</div>
</div>
</div>
</a>
</div>

<?php
$sql=mysqli_query($con,"select id from tblreportdamage");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-report-damage.php">
<div class="card card-sm bg-danger text-white" style="height: 145px">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Report Damage</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Listed Report Damage</small>
</div>
</div>
</div>
</a>
</div>

</div>

</div>
</div>

<div class="row">
<div class="col-xl-12">

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total of Male and Female Farmers</h4>
<div class="card-body" style="height:40vh">
<canvas id="FarmerChart"></canvas>
</div>
</div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total User Accounts</h4>
<div class="card-body" style="height:40vh">
<canvas id="UserChart"></canvas>
</div>
</div>
</div>

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

</div>
</div>
<footer class="text-center bg-orange">
  <!-- Copyright -->
  <div class="text-right text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
  <!-- Copyright -->
</footer>
</div>

<?php }else if ($_SESSION['UserType'] == 'Employee'){ ?>
<!-- FOR Employee -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar_employee.php');
?>

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>

<div class="hk-pg-wrapper">

<nav class="hk-breadcrumb" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <label style="color: black"> Menu </label>
</li>
<li class="breadcrumb-item active" aria-current="page">
  <label style="color: gray"> Home </label>
</li>
</ol>
</nav>

<div class="container-fluid mt-xl-20 mt-sm-30 mt-15">

<div class="row">
<div class="col-xl-12">
<div class="hk-row">
                            
<?php
$query=mysqli_query($con,"select id from tblcategory");
$listedcat=mysqli_num_rows($query);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-categories.php">
<div class="card card-sm text-white" style="background-color: royalblue">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Categories</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedcat;?></span>
<small class="d-block">Listed Categories</small>
</div>
</div>
</div>
</a>
</div>
                            
<?php
$ret=mysqli_query($con,"select id from tblfarmer");
$listedcomp=mysqli_num_rows($ret);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-farmers.php">
<div class="card card-sm bg-warning text-white">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Farmers</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><span class="counter-anim"><?php echo $listedcomp;?></span></span>
<small class="d-block">Listed Farmers</small>
</div>
</div>
</div>
</a>
</div>

</div>

<div class="hk-row">

<?php
$sql=mysqli_query($con,"select id from tblreportharvested");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-report-harvested.php">
<div class="card card-sm bg-success text-white" style="height: 145px">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Report Harvested</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Listed Report Harvest</small>
</div>
</div>
</div>
</a>
</div>

<?php
$sql=mysqli_query($con,"select id from tblreportdamage");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-6 col-md-6">
<a href="manage-report-damage.php">
<div class="card card-sm bg-danger text-white" style="height: 145px">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-white font-weight-500">No. of Report Damage</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-white mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Listed Report Damage</small>
</div>
</div>
</div>
</a>
</div>

</div>

</div>
</div>

<div class="row">
<div class="col-xl-12">

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Total of Male and Female Farmers</h4>
<div class="card-body" style="height:40vh">
<canvas id="FarmerChart"></canvas>
</div>
</div>
</div>

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

</div>
</div>
<footer class="text-center bg-orange">
  <!-- Copyright -->
  <div class="text-right text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
  <!-- Copyright -->
</footer>
</div>
<?php }else{ ?>
  <!--FOR FARMERS_AIDE -->
<?php }?>
    <!--CHARTS--->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">

        <?php include 'chart-farmer.php'; ?>
        const farmer_data = document.getElementById('FarmerChart');

          new Chart(farmer_data, {
            type: 'line',
            data: {
              labels: <?php echo json_encode($Sexx); ?>,
              datasets: [{
                label: 'Total Number',
                data: <?php echo json_encode($totalamountofsex); ?>,
                borderWidth: 1
              }]
            }
          });

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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    <script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/irregular-data-series.js"></script>
    <script src="dist/js/init.js"></script>
</body>

</html>
<?php }else{
    header("Location: index.php");
} ?>
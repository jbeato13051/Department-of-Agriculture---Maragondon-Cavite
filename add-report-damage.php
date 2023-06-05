<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Add product Code
if(isset($_POST['submit']))
{
//Getting Post Values
$rsbsanum=$_POST['rsbsanumber']; 
$catname=$_POST['category']; 
$pname=$_POST['productname'];
$ahh=$_POST['ahh'];
$ghb=$_POST['ghb'];
$avpbkg=$_POST['avpbkg'];
$query=mysqli_query($con,"insert into tblreportdamage(RSBSA_Number,CategoryName,ProductName,AreaDamage_hectares,GrossDamage_bag,AverageWeightPerBag_kg) values('$rsbsanum','$catname','$pname','$ahh','$ghb','$avpbkg')"); 
if($query){
echo "<script>alert('Add successfully.');</script>";   
echo "<script>window.location.href='add-report-damage.php'</script>";
} else{
echo "<script>alert('Something went wrong. Please try again.');</script>";   
echo "<script>window.location.href='add-report-damage.php'</script>";    
}
}

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Report Damage Product</title>
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    
    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

<!-- Top Navbar -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       


        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->



        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
<li class="breadcrumb-item"><a href="manage-report-damage.php">Report Damage Product</a></li>
<li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
<section class="hk-sec-wrapper border border-info">
<div class="hk-pg-header">
<h4 class="hk-pg-title" style="color: black"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-list-box" style="color: black"></i> </span>Add Report Damage Product</h4>
</div>

<div class="row">
<div class="col-sm">
<form class="needs-validation" method="post" novalidate>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">RSBSA No.</label>
 <select class="form-control custom-select border border-dark" name="rsbsanumber" required>
<option value="">Select RSBSA No.</option>
<?php
$ret=mysqli_query($con,"select RSBSA_Number from tblfarmer");
while($row=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $row['RSBSA_Number'];?>"><?php echo $row['RSBSA_Number'];?></option>
<?php } ?>
</select>
<div class="invalid-feedback">Please select one of the following choices.</div>
</div>
<div class="col-md-6 mb-10">
<label for="validationCustom03">Category</label>
 <select class="form-control custom-select border border-dark" name="category" required>
<option value="">Select category</option>
<?php
$ret=mysqli_query($con,"select CategoryName from tblcategory");
while($row=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
<?php } ?>
</select>
<div class="invalid-feedback">Please select one of the following choices.</div>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Name</label>
<input type="text" class="form-control border border-dark" id="validationCustom03" placeholder="Product Name" name="productname" required>
<div class="invalid-feedback">Please provide a textfield.</div>
</div>
<div class="col-md-6 mb-10">
<label for="validationCustom03">Area Damage(ha)</label>
<input type="number" class="form-control border border-dark" id="validationCustom03" placeholder="Hectares" name="ahh" required>
<div class="invalid-feedback">Please provide a textfield.</div>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Gross Damage(bag)</label>
<input type="number" class="form-control border border-dark" id="validationCustom03" placeholder="Per bag" name="ghb" required>
<div class="invalid-feedback">Please provide a textfield.</div>
</div>
<div class="col-md-6 mb-10">
<label for="validationCustom03">Average Weight per bag(kg)</label>
<input type="number" class="form-control border border-dark" id="validationCustom03" placeholder="kilo gram" name="avpbkg" required>
<div class="invalid-feedback">Please provide a textfield.</div>
</div>
</div>

<button class="btn btn-primary" type="submit" name="submit">Submit</button>
<a class="btn btn-outline-info" href="manage-report-damage.php">Back to Report Damage Product Table
</a>
</form>
</div>
</div>
</section>
                     
</div>
</div>
</div>


            <!-- Footer -->
<?php include_once('includes/footer.php');?>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    <script src="dist/js/init.js"></script>
    <script src="dist/js/validation-data.js"></script>

</body>
</html>
<?php } ?>
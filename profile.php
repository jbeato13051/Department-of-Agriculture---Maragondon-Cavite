<?php 
   session_start();
   include "config.php";
   if (isset($_SESSION['UserName']) && isset($_SESSION['ID'])) {   
// Add company Code
if(isset($_POST['update']))
{
 $ID=$_SESSION['ID'];   
//Getting Post Values
$utype=$_POST['UserType']; 
$uname=$_POST['UserName'];
$pass=$_POST['Password']; 
$fname=$_POST['FirstName']; 
$lname=$_POST['LastName']; 
$num=$_POST['MobileNumber']; 
$email=$_POST['Email'];    
$query=mysqli_query($con,"update tblusers set UserType='$utype',UserName='$uname', Password='$pass', FirstName='$fname', LastName='$lname',MobileNumber='$num',Email='$email' where ID='$ID'"); 
if($query){
echo "<script>alert('Admin details updated successfully.');</script>";   
echo "<script>window.location.href='profile.php'</script>";
} 
}

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="dist/img/da-logo.svg.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Profile</title>
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
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
<li class="breadcrumb-item active" aria-current="page">
  <label style="color: gray"> Settings </label>
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
<h4 class="hk-pg-title" style="color: black"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-person" style="color: black"></i> </span>Profile</h4>
</div>

<div class="row">
<div class="col-sm">
<form method="post">
<?php 
//Getting admin name
$ID=$_SESSION['ID'];
$query=mysqli_query($con,"select * from tblusers where ID='$ID'");
while($row=mysqli_fetch_array($query)){
?>   

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="UserType">User Type</label>
<select class="form-control custom-select border border-dark" name="UserType" required>
<option value="<?php echo $row['UserType'];?>"><?php echo $sx=$row['UserType'];?></option>
<?php
$ret=mysqli_query($con,"select UserType from tblselectusertype");
while($newdatabase=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $newdatabase['UserType'];?>"><?php echo $newdatabase['UserType'];?></option>
<?php } ?>
</select>
</div>
<div class="col-md-6 mb-10">
<label for="UserName">User Name</label>
<input type="text" class="form-control border border-dark" pattern=".{8,}" title="Must contain at least 8 or more characters" placeholder="Enter username" value="<?php echo $row['UserName'];?>" name="UserName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="FirstName">First name</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter first name" value="<?php echo $row['FirstName'];?>" name="FirstName" required>
</div>
<div class="col-md-6 mb-10">
<label for="Password">Password</label>
<input type="password" class="form-control border border-dark" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" value="<?php echo $row['Password'];?>" id="Password" name="Password" required>
<input type="checkbox" onclick="myFunction()">Show Password
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="LastName">Last name</label>
<input type="text" class="form-control border border-dark"  pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter last name" value="<?php echo $row['LastName'];?>" name="LastName" required>
</div>
<div class="col-md-6 mb-10">
<label for="MobileNumber">Mobile Number</label>
<input type="number" class="form-control border border-dark" pattern="[0-9]{11}" title="Please enter exactly 11 digits number only" placeholder="09##-####-###" value="<?php echo $row['MobileNumber'];?>" name="MobileNumber" required>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="Email">Email</label>
<input type="email" class="form-control border border-dark" placeholder="name@domain.com" value="<?php echo $row['Email'];?>" name="Email" required>
</div>
</div>

<?php } ?>
                                 
<button class="btn btn-primary" type="submit" name="update">Update</button>
</form>
</div>
</div>
</section>
                     
</div>
</div>
</div>
</div>
<!-- /Main Content -->
<footer class="text-center bg-orange">
  <!-- Copyright -->
  <div class="text-right text-white p-3">
  Department of Agriculture - Maragondon Cavite
  </div>
  <!-- Copyright -->
</footer>
</div>
    <script type="text/javascript">
      function myFunction() {
        var x = document.getElementById("Password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
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
<?php }else{
    header("Location: index.php");
} ?>
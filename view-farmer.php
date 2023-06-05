<?php 
   session_start();
   include "config.php";
   if (isset($_SESSION['UserName']) && isset($_SESSION['ID'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title style="text-align: center;">Print User</title>
    <link rel="icon" type="image/png" href="dist/img/da-logo.svg.png"/>
<link rel="stylesheet" href="Custom/view-print/customviewstyle.css" />
</head>

<body>

<div class="buttons-container">

<button id="print">Print</button>
</div>

<a id="save_to_image">
<div class="invoice-container">
<table cellpadding="0" cellspacing="0">

<tr class="top">
<td colspan="2">
<table>
<tr>
<td class="title">
<img src="dist/img/govph-logo.svg.png" align=”left” style="display:block;width: 100%; max-width: 100px">
</td>
<td style="text-align: center;">
<h1>Department of Agriculture</h1>
<br>
<h5 style="font-family: normal">7PGP+76M, Maragondon National High School Compound,</h5>
<h5 style="font-family: normal">Maragondon, Cavite</h5>
<h5 style="font-family: normal">Phone: (046) 412 0359</h5>
</td>
<td class="title">
<img src="dist/img/da-logo.svg.png" align="right" style="display:block;width: 100%; max-width: 100px">
</td>
</tr>
</table>
</td>
</tr>

<tr class="information">
<td colspan="2">
<table>
<br>
<tr class="heading">
    <h2>Farmer Details</h2>
</tr>
<br>

<?php
$id=$_GET['id'];
$query=mysqli_query($con,"select * from tblfarmer where id='$id'");
while($row=mysqli_fetch_array($query))
{    
?>  
<tr>
<td>
<h4>RSBSA No. </h4><?php echo $row['RSBSA_Number'];?><br>
<h4>Area of Field(ha): </h4><?php echo $row['AreaOfField'];?>&nbsp;hectare/s<br>
<h4>First Name </h4><?php echo $row['FirstName'];?><br>
<h4>Middle Name </h4><?php echo $row['MiddleName'];?><br>
<h4>Last Name </h4><?php echo $row['LastName'];?><br>
</td>
<td>
<h4>Suffix Name </h4><?php echo $row['SuffixName'];?><br>
<h4>Birth Date </h4><?php echo $row['Birthdate'];?>
<h4>Marital Status </h4><?php echo $row['MaritalStatus'];?><br>
<h4>Address </h4><?php echo $row['Address'];?><br>
<h4>Mobile Number </h4><?php echo $row['MobileNumber'];?>
</td>
</tr>
</table>
</td>
</tr>

<tr class="heading">
<td>
<label>Registration Date</label>
</td>
<td>
<label>Last Update</label>
</td>
</tr>

<tr class="details">
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['UpdationDate'];?></td>
</tr>

<?php } ?>

</table>
</div>
</a>
<script src="Custom/view-print/html2canvas.js"></script>
<script src="Custom/view-print/customviewprint.js"></script>
</body>
</html>
<?php }else{
    header("Location: index.php");
} ?>
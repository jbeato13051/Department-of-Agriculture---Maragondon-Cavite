<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{
//Getting Post Values
$RSBSA_Number=$_POST['RSBSA_Number']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaHarvested_hectares=$_POST['AreaHarvested_hectares'];
$GrossHarvest_bag=$_POST['GrossHarvest_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];

$query=mysqli_query($con,"INSERT INTO tblreportharvested(RSBSA_Number,CategoryName,ProductName,AreaHarvested_hectares,GrossHarvest_bag,AverageWeightPerBag_kg,PostingDate) values('$RSBSA_Number','$CategoryName','$ProductName','$AreaHarvested_hectares','$GrossHarvest_bag','$AverageWeightPerBag_kg','$PostingDate')"); 

echo "<script>alert('Add successfully.');</script>";
echo "<script>window.location.href='manage-report-harvested.php'</script>";

}

?>
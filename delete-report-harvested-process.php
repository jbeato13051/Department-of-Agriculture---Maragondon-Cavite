<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$id=$_POST['id'];  
$RSBSA_Num=$_POST['RSBSA_Num']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaHarvested_hectares=$_POST['AreaHarvested_hectares'];
$GrossHarvest_bag=$_POST['GrossHarvest_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];
$UpdationDate=$_POST['UpdationDate'];

$query=mysqli_query($con,"INSERT INTO tblreportharvested_backup(RSBSA_Number,CategoryName,ProductName,AreaHarvested_hectares,GrossHarvest_bag,AverageWeightPerBag_kg,PostingDate,UpdationDate) values('$RSBSA_Num','$CategoryName','$ProductName','$AreaHarvested_hectares','$GrossHarvest_bag','$AverageWeightPerBag_kg','$PostingDate','$UpdationDate')");

$query=mysqli_query($con,"DELETE FROM tblreportharvested WHERE id='$id' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='manage-report-harvested.php'</script>";

}

?>
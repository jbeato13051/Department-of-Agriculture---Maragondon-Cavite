<?php
session_start();
include "config.php";


if(isset($_POST['submit_backupharvested']))
{
//Getting Post Values
$id=$_POST['id'];
$RSBSA_Num=$_POST['RSBSA_Num']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaHarvested_hectares=$_POST['AreaHarvested_hectares'];
$GrossHarvest_bag=$_POST['GrossHarvest_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];
$UpdationDate=$_POST['UpdationDate'];

$query=mysqli_query($con,"INSERT INTO tblreportharvested(RSBSA_Number,CategoryName,ProductName,AreaHarvested_hectares,GrossHarvest_bag,AverageWeightPerBag_kg,PostingDate,UpdationDate) values('$RSBSA_Num','$CategoryName','$ProductName','$AreaHarvested_hectares','$GrossHarvest_bag','$AverageWeightPerBag_kg','$PostingDate','$UpdationDate')"); 

$querydel=mysqli_query($con,"DELETE FROM tblreportharvested_backup WHERE id='$id' ");

echo "<script>alert('Restore successfully.');</script>";
echo "<script>window.location.href='recyclebin-report-harvested.php'</script>";
}

?>
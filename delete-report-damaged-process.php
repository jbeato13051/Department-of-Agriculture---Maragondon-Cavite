<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$id=$_POST['id'];  

$RSBSA_Num=$_POST['RSBSA_Num']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaDamage_hectares=$_POST['AreaDamage_hectares'];
$GrossDamage_bag=$_POST['GrossDamage_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];
$UpdationDate=$_POST['UpdationDate'];

$query_deladd=mysqli_query($con,"INSERT INTO tblreportdamage_backup(RSBSA_Number,CategoryName,ProductName,AreaDamage_hectares,GrossDamage_bag,AverageWeightPerBag_kg,PostingDate,UpdationDate) values('$RSBSA_Num','$CategoryName','$ProductName','$AreaDamage_hectares','$GrossDamage_bag','$AverageWeightPerBag_kg','$PostingDate','$UpdationDate')");

$query=mysqli_query($con,"DELETE FROM tblreportdamage WHERE id='$id' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='manage-report-damage.php'</script>";

}

?>
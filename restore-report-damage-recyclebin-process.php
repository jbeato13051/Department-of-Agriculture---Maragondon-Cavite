<?php
session_start();
include "config.php";


if(isset($_POST['submit_backupdamage']))
{
//Getting Post Values
$id=$_POST['id'];
$RSBSA_Num=$_POST['RSBSA_Num']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaDamage_hectares=$_POST['AreaDamage_hectares'];
$GrossDamage_bag=$_POST['GrossDamage_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];
$UpdationDate=$_POST['UpdationDate'];

$query=mysqli_query($con,"INSERT INTO tblreportdamage(RSBSA_Number,CategoryName,ProductName,AreaDamage_hectares,GrossDamage_bag,AverageWeightPerBag_kg,PostingDate,UpdationDate) values('$RSBSA_Num','$CategoryName','$ProductName','$AreaDamage_hectares','$GrossDamage_bag','$AverageWeightPerBag_kg','$PostingDate','$UpdationDate')"); 

$querydel=mysqli_query($con,"DELETE FROM tblreportdamage_backup WHERE id='$id' ");

echo "<script>alert('Restore successfully.');</script>";
echo "<script>window.location.href='recyclebin-report-damaged.php'</script>";
}

?>
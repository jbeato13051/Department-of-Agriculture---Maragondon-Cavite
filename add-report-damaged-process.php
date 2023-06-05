<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{
//Getting Post Values
$RSBSA_Number=$_POST['RSBSA_Number']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaDamage_hectares=$_POST['AreaDamage_hectares'];
$GrossDamage_bag=$_POST['GrossDamage_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];

$query=mysqli_query($con,"INSERT INTO tblreportdamage(RSBSA_Number,CategoryName,ProductName,AreaDamage_hectares,GrossDamage_bag,AverageWeightPerBag_kg,PostingDate) values('$RSBSA_Number','$CategoryName','$ProductName','$AreaDamage_hectares','$GrossDamage_bag','$AverageWeightPerBag_kg','$PostingDate')"); 

echo "<script>alert('Add successfully.');</script>";
echo "<script>window.location.href='manage-report-damage.php'</script>";

}

?>
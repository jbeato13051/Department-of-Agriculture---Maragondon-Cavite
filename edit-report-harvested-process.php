<?php
session_start();
include "config.php";

if(isset($_POST['update']))
{
$id=$_POST['id'];    
//Getting Post Values
$RSBSA_Number=$_POST['RSBSA_Number']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaHarvested_hectares=$_POST['AreaHarvested_hectares'];
$GrossHarvest_bag=$_POST['GrossHarvest_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];


$query=mysqli_query($con,"UPDATE tblreportharvested SET RSBSA_Number='$RSBSA_Number', CategoryName='$CategoryName', ProductName='$ProductName', AreaHarvested_hectares='$AreaHarvested_hectares', GrossHarvest_bag='$GrossHarvest_bag', AverageWeightPerBag_kg='$AverageWeightPerBag_kg', PostingDate='$PostingDate' WHERE id='$id'"); 

echo "<script>alert('Update successfully.');</script>";
echo "<script>window.location.href='manage-report-harvested.php'</script>";

}

?>
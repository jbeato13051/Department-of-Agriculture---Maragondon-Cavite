<?php
session_start();
include "config.php";

if(isset($_POST['update']))
{
$id=$_POST['id'];    
//Getting Post Values
$id=$_POST['id'];
$RSBSA_Number=$_POST['RSBSA_Number']; 
$CategoryName=$_POST['CategoryName']; 
$ProductName=$_POST['ProductName'];
$AreaDamage_hectares=$_POST['AreaDamage_hectares'];
$GrossDamage_bag=$_POST['GrossDamage_bag'];
$AverageWeightPerBag_kg=$_POST['AverageWeightPerBag_kg'];
$PostingDate=$_POST['PostingDate'];


$query=mysqli_query($con,"UPDATE tblreportdamage SET RSBSA_Number='$RSBSA_Number', CategoryName='$CategoryName', ProductName='$ProductName', AreaDamage_hectares='$AreaDamage_hectares', GrossDamage_bag='$GrossDamage_bag', AverageWeightPerBag_kg='$AverageWeightPerBag_kg', PostingDate='$PostingDate' WHERE id='$id'"); 

echo "<script>alert('Update successfully.');</script>";
echo "<script>window.location.href='manage-report-damage.php'</script>";

}

?>
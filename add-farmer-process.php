<?php
session_start();
include "config.php";

if(isset($_POST['submit_farmer']))
{
//Getting Post Values
$RSBSA=$_POST['RSBSA'];
$AreaOfField=$_POST['AreaOfField'];
$FirstName=$_POST['FirstName'];
$MiddleName=$_POST['MiddleName'];   
$LastName=$_POST['LastName'];
$SuffixName=$_POST['SuffixName'];
$Sex=$_POST['Sex'];
$Birthdate=$_POST['Birthdate'];
$MaritalStatus=$_POST['MaritalStatus'];
$Address=$_POST['Address'];
$MobileNumber=$_POST['MobileNumber'];
$Email=$_POST['Email'];
$PostingDate=$_POST['PostingDate'];

$query=mysqli_query($con,"INSERT INTO tblfarmer(RSBSA_Number, AreaOfField, FirstName, MiddleName, LastName, SuffixName, Sex, Birthdate, MaritalStatus, Address, MobileNumber, Email, PostingDate) VALUES('$RSBSA', '$AreaOfField', '$FirstName', '$MiddleName', '$LastName', '$SuffixName', '$Sex', '$Birthdate', '$MaritalStatus', '$Address', '$MobileNumber', '$Email', '$PostingDate')"); 

echo "<script>alert('Add successfully.');</script>";
echo "<script>window.location.href='manage-farmers.php'</script>";


}

?>
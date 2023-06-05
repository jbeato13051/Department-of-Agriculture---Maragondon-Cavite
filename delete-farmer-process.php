<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$id=$_POST['id'];  

$RSBSA_Num=$_POST['RSBSA_Num'];
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
$UpdationDate=$_POST['UpdationDate'];

$query_deladd=mysqli_query($con,"INSERT INTO tblfarmer_backup (RSBSA_Number, AreaOfField, FirstName, MiddleName, LastName, SuffixName, Sex, Birthdate, MaritalStatus, Address, MobileNumber, Email, PostingDate,UpdationDate) VALUES('$RSBSA_Num', '$AreaOfField', '$FirstName', '$MiddleName', '$LastName', '$SuffixName', '$Sex', '$Birthdate', '$MaritalStatus', '$Address', '$MobileNumber', '$Email', '$PostingDate', '$UpdationDate')");

$query=mysqli_query($con,"DELETE FROM tblfarmer WHERE id='$id' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='manage-farmers.php'</script>";

}

?>
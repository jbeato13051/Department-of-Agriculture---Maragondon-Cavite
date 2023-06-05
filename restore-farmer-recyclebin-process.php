<?php
session_start();
include "config.php";


if(isset($_POST['submit_backupfarmers']))
{
//Getting Post Values
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

$query_deladd=mysqli_query($con,"INSERT INTO tblfarmer (RSBSA_Number, AreaOfField, FirstName, MiddleName, LastName, SuffixName, Sex, Birthdate, MaritalStatus, Address, MobileNumber, Email, PostingDate,UpdationDate) VALUES('$RSBSA_Num', '$AreaOfField', '$FirstName', '$MiddleName', '$LastName', '$SuffixName', '$Sex', '$Birthdate', '$MaritalStatus', '$Address', '$MobileNumber', '$Email', '$PostingDate', '$UpdationDate')");

$querydel=mysqli_query($con,"DELETE FROM tblfarmer_backup WHERE id='$id' ");

echo "<script>alert('Restore successfully.');</script>";
echo "<script>window.location.href='recyclebin-farmer.php'</script>";
}

?>
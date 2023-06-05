<?php
session_start();
include "config.php";

if(isset($_POST['update']))
{
$id=$_POST['id'];
//Getting Post Values
$RSBSA_Number=$_POST['RSBSA_Number'];
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

$query=mysqli_query($con,"update  tblfarmer set RSBSA_Number='$RSBSA_Number', AreaOfField='$AreaOfField', FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', SuffixName='$SuffixName', Sex='$Sex', Birthdate='$Birthdate', MaritalStatus='$MaritalStatus', Address='$Address', MobileNumber='$MobileNumber', Email='$Email', PostingDate='$PostingDate' where id='$id'"); 

echo "<script>alert('Update successfully.');</script>";
echo "<script>window.location.href='manage-farmers.php'</script>";
}

?>
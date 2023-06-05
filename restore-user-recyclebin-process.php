<?php
session_start();
include "config.php";


if(isset($_POST['submit_backupusers']))
{
//Getting Post Values
$ID=$_POST['ID'];
$UserType=$_POST['UserType'];
$uname=$_POST['uname'];
$Password=md5($_POST['Password']);
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MobileNumber=$_POST['MobileNumber'];
$Email=$_POST['Email'];
$Regdate=$_POST['Regdate'];
$UpdationDate=$_POST['UpdationDate'];

$query=mysqli_query($con,"insert into tblusers (UserType,UserName,Password,FirstName,LastName,MobileNumber,Email,Regdate,UpdationDate) 
values('$UserType','$uname','$Password','$FirstName','$LastName','$MobileNumber','$Email','$Regdate','$UpdationDate')"); 

$querydel=mysqli_query($con,"DELETE FROM tblusers_backup WHERE ID='$ID' ");

echo "<script>alert('Restore successfully.');</script>";
echo "<script>window.location.href='recyclebin-user.php'</script>";
}

?>
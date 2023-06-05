<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$ID=$_POST['ID'];
$UserType=$_POST['UserType'];
$UserName=$_POST['UserName'];
$Password=md5($_POST['Password']);
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MobileNumber=$_POST['MobileNumber'];
$Email=$_POST['Email'];
$Regdate=$_POST['Regdate'];
$UpdationDate=$_POST['UpdationDate'];

$query_deladd=mysqli_query($con,"INSERT INTO tblusers_backup (UserType,UserName,Password,FirstName,LastName,MobileNumber,Email,Regdate,UpdationDate) 
values('$UserType','$UserName','$Password','$FirstName','$LastName','$MobileNumber','$Email','$Regdate','$UpdationDate')"); 

$query=mysqli_query($con,"DELETE FROM tblusers WHERE ID='$ID' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='manage-users.php'</script>";

}

?>
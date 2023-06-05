<?php
session_start();
include "config.php";


if(isset($_POST['submit_users']))
{
//Getting Post Values
$UserType=$_POST['UserType'];
$uname=$_POST['uname'];
$Password=$_POST['Password'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MobileNumber=$_POST['MobileNumber'];
$Email=$_POST['Email'];
$Regdate=$_POST['Regdate'];

$query=mysqli_query($con,"insert into tblusers (UserType,UserName,Password,FirstName,LastName,MobileNumber,Email,Regdate) 
values('$UserType','$uname','$Password','$FirstName','$LastName','$MobileNumber','$Email','$Regdate')"); 

echo "<script>alert('Add successfully.');</script>";
echo "<script>window.location.href='manage-users.php'</script>";
}

?>
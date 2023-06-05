<?php
session_start();
include "config.php";

if(isset($_POST['update']))
{
$ID=$_POST['ID'];  
//Getting Post Values
$UserType=$_POST['UserType'];
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MobileNumber=$_POST['MobileNumber'];
$Email=$_POST['Email'];
$Regdate=$_POST['Regdate']; 
  
$query=mysqli_query($con,"UPDATE tblusers SET UserType='$UserType',UserName='$UserName',Password='$Password',FirstName='$FirstName',LastName='$LastName',MobileNumber='$MobileNumber',Email='$Email',Regdate='$Regdate' WHERE ID='$ID'"); 

echo "<script>alert('Update successfully.');</script>";
echo "<script>window.location.href='manage-users.php'</script>";
}

?>
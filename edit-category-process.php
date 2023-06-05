<?php
session_start();
include "config.php";

if(isset($_POST['update']))
{
$id=$_POST['id'];  
//Getting Post Values
$CategoryName=$_POST['CategoryName']; 
  
$query=mysqli_query($con,"update tblcategory set CategoryName='$CategoryName' where id='$id'"); 

echo "<script>alert('Update successfully.');</script>";
echo "<script>window.location.href='manage-categories.php'</script>";
}

?>
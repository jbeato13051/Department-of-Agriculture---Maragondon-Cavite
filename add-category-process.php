<?php
session_start();
include "config.php";

if(isset($_POST['submit_addcategory']))
{
//Getting Post Values
$catname=$_POST['catname'];
$query=mysqli_query($con,"insert into tblcategory (CategoryName) values('$catname')"); 

echo "<script>alert('Add successfully.');</script>";   
echo "<script>window.location.href='manage-categories.php'</script>";
}

?>
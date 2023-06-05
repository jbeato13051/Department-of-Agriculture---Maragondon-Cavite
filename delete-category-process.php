<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$id=$_POST['id'];  

$query=mysqli_query($con,"DELETE FROM tblcategory WHERE id='$id' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='manage-categories.php'</script>";

}

?>
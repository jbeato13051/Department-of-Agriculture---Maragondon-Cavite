<?php
session_start();
include "config.php";

if(isset($_POST['delby1'])){    

$id=$_POST['id'];  

$query=mysqli_query($con,"DELETE FROM tblreportdamage_backup WHERE id='$id' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='recyclebin-report-damaged.php'</script>";

}

?>
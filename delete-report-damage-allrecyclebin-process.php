<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$query=mysqli_query($con,"TRUNCATE tblreportdamage_backup");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='recyclebin-report-damaged.php'</script>";

}

?>
<?php
session_start();
include "config.php";

if(isset($_POST['del'])){    

$query=mysqli_query($con,"TRUNCATE tblusers_backup");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='recyclebin-user.php'</script>";

}

?>
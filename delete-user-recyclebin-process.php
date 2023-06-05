<?php
session_start();
include "config.php";

if(isset($_POST['delby1'])){    

$ID=$_POST['ID'];  

$query=mysqli_query($con,"DELETE FROM tblusers_backup WHERE ID='$ID' ");

echo "<script>alert('Delete successfully.');</script>";
echo "<script>window.location.href='recyclebin-user.php'</script>";

}

?>
<?php
session_start();
include('includes/config.php');
//Getting Post Values
$id=$_POST['id']; 
  
$query=mysqli_query($con,"SELECT * FROM tblfarmer WHERE id='$id'"); 

?>
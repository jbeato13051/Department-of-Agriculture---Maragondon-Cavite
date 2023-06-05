<?php
session_start();
include('includes/config.php');
//Getting Post Values
$ID=$_POST['ID']; 
  
$query=mysqli_query($con,"SELECT * FROM tblusers WHERE ID='$ID'"); 

?>
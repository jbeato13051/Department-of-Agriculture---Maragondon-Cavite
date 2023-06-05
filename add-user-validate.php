<?php 
session_start();
include "config.php";
// extracting POST Variables
extract($_POST);
    $error = [];
    $check = $con->query("SELECT * FROM tblusers where UserName = '{$uname}'". (isset($id) && $id > 0 ? " and id != '{$id}' " : "" ));
    if($check->num_rows > 0){
        $error['field_name'] = 'uname';
        $error['msg']=" Username is already exists";
    }
    echo json_encode($error);
?>
<?php 
include "config.php";
// extracting POST Variables
extract($_POST);
    $error = [];
    $check = $con->query("SELECT * FROM tblcategory where CategoryName = '{$catname}'". (isset($id) && $id > 0 ? " and id != '{$id}' " : "" ));
    if($check->num_rows > 0){
        $error['field_name'] = 'catname';
        $error['msg']=" CategoryName is already exists";
    }
    echo json_encode($error);
?>
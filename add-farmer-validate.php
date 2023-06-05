<?php 
include "config.php";
// extracting POST Variables
extract($_POST);
    $error = [];
    $check = $con->query("SELECT * FROM tblfarmer where RSBSA_Number = '{$RSBSA}'". (isset($id) && $id > 0 ? " and id != '{$id}' " : "" ));
    if($check->num_rows > 0){
        $error['field_name'] = 'RSBSA';
        $error['msg']=" RSBSA Number is already exists";
    }
    echo json_encode($error);
?>
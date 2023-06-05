<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT Sex as Sexx,COUNT(Sex) as totalamountofsex FROM `tblfarmer` GROUP BY Sexx"); 

    foreach ($query as $data) {
        $Sexx[] = $data['Sexx'];
        $totalamountofsex[] = $data['totalamountofsex'];
    }

?>
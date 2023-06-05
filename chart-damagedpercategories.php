<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT CategoryName as DamageCategoryName, SUM(GrossDamage_bag*AverageWeightPerBag_kg) as totalsumofdamage FROM tblreportdamage GROUP BY DamageCategoryName"); 

    foreach ($query as $data) {
        $DamageCategoryName[] = $data['DamageCategoryName'];
        $totalsumofdamage[] = $data['totalsumofdamage'];
    }

?>
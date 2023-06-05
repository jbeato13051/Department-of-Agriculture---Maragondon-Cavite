<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT DATE_FORMAT(PostingDate, '%Y') AS damage_year_and_month, SUM(GrossDamage_bag*AverageWeightPerBag_kg) AS damage_amount FROM tblreportdamage GROUP BY damage_year_and_month"); 

    foreach ($query as $data) {
        $damage_year_and_month[] = $data['damage_year_and_month'];
        $damage_amount[] = $data['damage_amount'];
    }

    ?>
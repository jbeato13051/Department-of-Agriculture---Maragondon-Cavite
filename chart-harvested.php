<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT PostingDate AS harvest_year_and_month, SUM(GrossHarvest_bag*AverageWeightPerBag_kg) AS harvest_amount FROM tblreportharvested GROUP BY harvest_year_and_month"); 

    foreach ($query as $data) {
        $harvest_year_and_month[] = $data['harvest_year_and_month'];
        $harvest_amount[] = $data['harvest_amount'];
    }

    ?>
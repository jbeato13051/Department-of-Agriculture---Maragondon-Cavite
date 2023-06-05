<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT CategoryName, SUM(GrossHarvest_bag*AverageWeightPerBag_kg) as totalsum FROM tblreportharvested GROUP BY CategoryName"); 

    foreach ($query as $data) {
        $CategoryName[] = $data['CategoryName'];
        $totalsum[] = $data['totalsum'];
    }

?>
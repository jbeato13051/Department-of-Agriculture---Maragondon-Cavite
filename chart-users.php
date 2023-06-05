<?php
include "config.php";

    $query=mysqli_query($con,
      "SELECT UserType as utype,COUNT(UserType) as totalamountofut FROM tblusers GROUP BY utype"); 

    foreach ($query as $data) {
        $utype[] = $data['utype'];
        $totalamountofut[] = $data['totalamountofut'];
    }

?>
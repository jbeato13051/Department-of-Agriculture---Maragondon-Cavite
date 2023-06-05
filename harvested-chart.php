<?php 

  $username = "root";
  $password = "";
  $database = "da_database";

  try{
    $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    die("ERROR: Could not connect." . $e->getMessage());
  }

 ?>
<div class="row">
<div class="col-xl-12">

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
<div class="card border border-info" align="center">
<h4 class="card-title">Harvested Products</h4>
<div class="card-body">
<input type="month" onchange="startDateFilter(this)" value="2022-01" min="1989-01-01">
<input type="month" onchange="endDateFilter(this)" value="2022-12" min="1989-01-01">
<canvas id="HarvestChart"></canvas>
</div>
</div>
</div>

</div>

</div>
</div>
    <?php 
    try {
      $sql=("SELECT PostingDate AS harvest_year_and_month, SUM(GrossHarvest_bag*AverageWeightPerBag_kg) AS harvest_amount FROM da_database.tblreportharvested GROUP BY harvest_year_and_month");
      $result = $pdo->query($sql);

      if ($result->rowCount() > 0) {
        while($row = $result->fetch()){
          $dateArray[]= $row["harvest_year_and_month"];
          $amountArray[]= $row["harvest_amount"];
        }
        unset($result);
      }else{
        echo 'No result in DB';
      }
    }catch(PDOException $e){
      die("Error");
    }
    ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

    <script>
    const dateArrayJS = <?php echo json_encode($dateArray); ?>;
    //console.log(dateArrayJS)

    const dateChartJS = dateArrayJS.map((day,index)=> {
      let dayjs = new Date(day);
      return dayjs.setHours(0, 0, 0, 0);
    });

    // setup 
    const data = {
      labels: dateChartJS,
      datasets: [{
        label: 'Total Harvest',
        data: <?php echo json_encode($amountArray); ?>,
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        //autoSkip: false,
        scales: {
          x:{
            min: '2022-01',
            max: '2022-12',
            type: 'time',
            time: {
              unit: 'month'
            }
          },
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const HarvestChart = new Chart(
      document.getElementById('HarvestChart'),
      config
    );

    function startDateFilter(date){
      const startDate = new Date(date.value);
      console.log(startDate.setHours(0, 0, 0, 0));
      HarvestChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
      HarvestChart.update();
    }

    function endDateFilter(date){
      const endDate = new Date(date.value);
      console.log(endDate.setHours(0, 0, 0, 0));
      HarvestChart.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
      HarvestChart.update();
    }

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script>
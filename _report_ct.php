<script type="text/javascript">
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "<?php echo $start.' - '.$end.' Chemical Tanks Report'; ?>",
          fontSize: 30
        },
        animationEnabled: true,
        axisX: {
          gridColor: "Silver",
          tickColor: "silver",
          // valueFormatString: "DD/MMM"
        },
        toolTip: {
          shared: true
        },
        theme: "theme2",
        axisY: {
          gridColor: "Silver",
          tickColor: "silver"
        },
        legend: {
          verticalAlign: "center",
          horizontalAlign: "right"
        },
        data: [
        //caustic a 
        {
          type: "line",
          showInLegend: true,
          lineThickness: 2,
          name: "Caustic A",
          markerType: "square",
          color: "#F08080",
          dataPoints: [ 
          <?php 

          $rs = mysqli_query($con, "SELECT * FROM chemical_tanks WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));
          while($row = mysqli_fetch_array($rs)){
           $id=$row['id'];
           $record_time = $row['record_time'];
           $zuva2 = new DateTime($record_time);
            $yr = $zuva2->format('Y');
            $mn = $zuva2->format('m')-1;
            $dy = $zuva2->format('d');
            $a = $row['a']; 
          
          ?>

          { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $a; ?> },
          <?php } ?>
          ]
        },
        //caustic b 
        {
          type: "line",
          showInLegend: true,
          lineThickness: 2,
          name: "Caustic B",
          markerType: "square",
          color: "#008080",
          dataPoints: [ 
          <?php 

          $rs = mysqli_query($con, "SELECT * FROM chemical_tanks WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));
          while($row = mysqli_fetch_array($rs)){
           $id=$row['id'];
           $record_time = $row['record_time'];
           $zuva2 = new DateTime($record_time);
            $yr = $zuva2->format('Y');
            $mn = $zuva2->format('m')-1;
            $dy = $zuva2->format('d');
            $a = $row['b']; 
          
          ?>

          { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $a; ?> },
          <?php } ?>
          ]
        },
        //acid a 
        {
          type: "line",
          showInLegend: true,
          lineThickness: 2,
          name: "Acid A",
          markerType: "square",
          color: "#808000",
          dataPoints: [ 
          <?php 

          $rs = mysqli_query($con, "SELECT * FROM chemical_tanks WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));
          while($row = mysqli_fetch_array($rs)){
           $id=$row['id'];
           $record_time = $row['record_time'];
           $zuva2 = new DateTime($record_time);
            $yr = $zuva2->format('Y');
            $mn = $zuva2->format('m')-1;
            $dy = $zuva2->format('d');
            $a = $row['c']; 
          
          ?>

          { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $a; ?> },
          <?php } ?>
          ]
        },
        //acid b 
        {
          type: "line",
          showInLegend: true,
          lineThickness: 2,
          name: "Acid B",
          markerType: "square",
          color: "#800080",
          dataPoints: [ 
          <?php 

          $rs = mysqli_query($con, "SELECT * FROM chemical_tanks WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));
          while($row = mysqli_fetch_array($rs)){
           $id=$row['id'];
           $record_time = $row['record_time'];
           $zuva2 = new DateTime($record_time);
            $yr = $zuva2->format('Y');
            $mn = $zuva2->format('m')-1;
            $dy = $zuva2->format('d');
            $a = $row['d']; 
          
          ?>

          { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $a; ?> },
          <?php } ?>
          ]
        },
        ],
        legend: {
          cursor: "pointer",
          itemclick: function (e) {
            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
            }
            else {
              e.dataSeries.visible = true;
            }
            chart.render();
          }
        }
      });

      chart.render();
    }
  </script>


<script src="js/canvasjs.min.js"></script>
<div id="chartContainer" style="height: 400px; width: 100%;">
<?php include('_header.php'); ?>

<style>
.form-control{
  color:#555;
}
</style>


<div class="container">

  <form action="" class="form-horizontal" method="POST" role="form">
        <fieldset>
            <legend>Reports/History</legend>
            
            <div class="col-md-3 form-group">
                <label for="dtp_input1" class="control-label">Start Date &amp; Time</label>
                <div class="input-group date form_datetime col-md-10" data-date="" data-date-format="yyyy-MM-dd HH:ii" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly name="start">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                      </div>
                <input type="hidden" id="dtp_input1" value=""  /><br/>
            </div>

            <div class="col-md-3 form-group">
                <label for="dtp_input1" class="control-label">End Date &amp; Time</label>
                <div class="input-group date form_datetime2 col-md-10" data-date="" data-date-format="yyyy-MM-dd HH:ii" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly name="end" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                      </div>
                <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>

            <div class="col-md-3 form-group">
              <label>Report</label>
              <select name="type" class="form-control">
                <option value="Water Tanks">Water Tanks</option>
                <option value="Chillers">Chillers</option>
                <option value="Compressors">Compressors</option>
              </select>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-2 form-group">
              <br>
              <input type="submit" name="submit" value="Get Report" class="form-control">
            </div>
        </fieldset>
    </form>

    <br><br><br>
    <?php if(isset($_POST['submit'])){
      $start = $_POST['start'];
      $end = $_POST['end'];
      $report = $_POST['type']; 

      if ($start >= $end ){
        ?> <script>alert("Start date must be greater than the end date.");</script>  <?php
        exit;
      }

      if($report == 'Chillers'){
        $rs = mysqli_query($con, "SELECT * FROM chillers WHERE record_time BETWEEN '2018-08-01 00:00:00' AND  '2018-08-30 00:00:00'")or die(mysqli_error($con));     
      ?>


  <script type="text/javascript">
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "<?php echo $start. ' - '.$end.' '.$report.' Report'; ?>",
          fontSize: 30
        },
        animationEnabled: true,
        axisX: {
          gridColor: "Silver",
          tickColor: "silver",
          valueFormatString: "YY/MM"
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
        {
          type: "line",
          showInLegend: true,
          lineThickness: 2,
          name: "Visits",
          markerType: "square",
          color: "#F08080",
          dataPoints: [
            <?php
            while($row = mysqli_fetch_array($rs)){
             $id=$row['id'];
             $record_time = $row['record_time'];
             $a = $row['a'];
             $zuva2 = new DateTime($record_time);
             $yr = $zuva2->format('Y');
             $mn = $zuva2->format('m')-1;
             $dy = $zuva2->format('d'); ?>

              { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $a; ?> },

            <?php } ?>
          ]
        },
        {
          type: "line",
          showInLegend: true,
          name: "Unique Visits",
          color: "#20B2AA",
          lineThickness: 2, 0773309118

          dataPoints: [
            <?php
            while($row = mysqli_fetch_array($rs)){
             $id=$row['id'];
             $record_time = $row['record_time'];
             $b = $row['b'];
             $zuva2 = new DateTime($record_tim);
             $yr = $zuva2->format('Y');
             $mn = $zuva2->format('m')-1;
             $dy = $zuva2->format('d'); ?>

              { x: new Date(<?php echo $yr; ?>, <?php echo $mn; ?>, <?php echo $dy; ?>), y: <?php echo $b; ?> },

            <?php } ?>
          ]
        }
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
  
  <?php  } //clsoing if chillers

     else {
      echo "display these"; 
     }

      

        
      // elseif($report == 'Compressors')
      //   $rs = mysqli_query($con, "SELECT * FROM compressors WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));
      // elseif($report == 'Water Tanks')
      //   $rs = mysqli_query($con, "SELECT * FROM water_tanks WHERE record_time BETWEEN '$start' AND  '$end'")or die(mysqli_error($con));

   }//closing if isset
      ?>

  <div id="chartContainer" style="height: 400px; width: 100%;">
  </div>

  <?php include('_footer.php'); ?>
</body>
</html>

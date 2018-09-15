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
        $rs = mysqli_query($con, "SELECT * FROM chillers WHERE record_time BETWEEN '2018-01-01 00:00:00' AND  '2018-08-30 00:00:00'")or die(mysqli_error($con));     

          while($row = mysqli_fetch_array($rs)){
           echo $id=$row['id'];
           echo $record_time = $row['record_time'];
           $zuva2 = new DateTime($record_time);
             echo $yr = $zuva2->format('Y');
             echo $mn = $zuva2->format('m')-1;
             echo $dy = $zuva2->format('d');
           echo $a = $row['a'];
           echo '<br>'; 
         }?>
     <?php  } //clsoing if chillers

     else {
      echo "display these"; 
     }
      



    } ?>
</div>


<?php include('_footer.php'); ?>



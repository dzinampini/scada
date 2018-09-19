<?php include('opendb.php'); 

    $ch_query = "SELECT * FROM compressors ORDER BY id DESC  LIMIT 1 ";
    $ch_values=mysqli_query($con, $ch_query);
    $row=mysqli_fetch_array($ch_values);

    $cosa = $row['aa'];
    $cosb = $row['bb'];
    $cosc = $row['cc'];
    $cosd = $row['dd']; 
    $cose = $row['ee']; 
    $pressure = $row['pressure']; 

    if($pressure < 50){
      $red = 'style="background-color:red";';
    }
    else if($pressure > 50){
      $red = 'style="background-color:green";';
    }


    $red_text = 'style="color:red";';
    $green_text = 'style="color:green";'; 

  

    if ($cosa == 0){
      $cosa = 'OFF';
      $stcoa = $red_text; 
    }
    elseif($cosa == 1){
     $cosa = 'ON';
      $stcoa = $green_text;  
    }

    if ($cosb == 0){
      $cosb = 'OFF';
      $stcob = $red_text; 
    }
    elseif($cosb == 1){
     $cosb = 'ON';
      $stcob = $green_text;  
    }

    if ($cosc == 0){
      $cosc = 'OFF';
      $stcoc = $red_text; 
    }
    elseif($cosc == 1){
     $cosc = 'ON';
      $stcoc = $green_text;  
    }

    if ($cosd == 0){
      $cosd = 'OFF';
      $stcod = $red_text; 
    }
    elseif($cosd == 1){
     $cosd = 'ON';
      $stcod = $green_text;  
    }

    if ($cose == 0){
      $cose = 'OFF';
      $stcoe = $red_text; 
    }
    elseif($cose == 1){
     $cose = 'ON';
      $stcoe = $green_text;  
    }
      


  ?>

<div class="row">
  <div class="col-md-10">
    <div class="row">
      <div class="col-md-2">
        <label>Big</label>
        <br>
        <label <?php echo $stcoa; ?>><?php echo $cosa; ?></label>
        </div>
        <div class="col-md-2">
          <label>Xing Run</label>
          <br>
          <label <?php echo $stcob; ?>><?php echo $cosb; ?></label>
        </div>
        <div class="col-md-3">
          <label>1</label>
          <br>
          <label <?php echo $stcoc; ?>><?php echo $cosc; ?></label>
        </div> 
        <div class="col-md-2">
          <label>2</label>
          <br>
          <label <?php echo $stcod; ?>><?php echo $cosd; ?></label>
        </div> 
        <div class="col-md-3">
          <label>3</label>
          <br>
          <label <?php echo $stcoe; ?>><?php echo $cose; ?></label>
        </div> 
    </div>
  </div>
  <div class="col-md-2" style="text-align:center;">
    <label>Pressure</label>
    <input name="" value="<?php echo $pressure; ?> Bars" class="form-control" type="text" <?php echo $red; ?>>
  </div>
</div>
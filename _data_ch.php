<?php include('opendb.php'); 

    $ch_query = "SELECT * FROM chillers ORDER BY id DESC  LIMIT 1 ";
    $ch_values=mysqli_query($con, $ch_query);
    $row=mysqli_fetch_array($ch_values);
    $wta = $row['a'];
    $wtb = $row['b'];
    $wtc = $row['c'];
    $wtd = $row['d'];
    $cosa = $row['aa'];
    $cosb = $row['bb'];
    $cosc = $row['cc'];
    $cosd = $row['dd']; 
    
    $red_text = 'style="color:red";';
    $green_text = 'style="color:green";';

    $red = 'style="background-color:red;"'; 
    $green = 'style="background-color:green;"'; 

     if($wta < 20 ) 
      $sta = $red; 
    else
      $sta = $green; 

    if($wtb < 20 ) 
      $stb = $red; 
    else
      $stb = $green; 

    if($wtc < 20 ) 
      $stc = $red; 
    else
      $stc = $green; 

    if($wtd < 20 ) 
      $std = $red; 
    else
      $std = $green;  

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
      


  ?>

<div class="row">
  <div class="col-md-3">
    <label>1</label>
    <input name="" value="<?php echo $wta; ?> %" class="form-control" type="text" <?php echo $sta; ?>>
    <br>
    <label <?php echo $stcoa; ?>><?php echo $cosa; ?></label>
  </div>
  <div class="col-md-3">
    <label>2</label>
    <input name="" value="<?php echo $wtb; ?> %" class="form-control" type="text" <?php echo $stb; ?>>
    <br>
    <label <?php echo $stcob; ?>><?php echo $cosb; ?></label>
  </div>
  <div class="col-md-3">
    <label>3</label>
    <input name="" value="<?php echo $wtc; ?> %" class="form-control" type="text" <?php echo $stc; ?>>
    <br>
    <label <?php echo $stcoc; ?>><?php echo $cosc; ?></label>
  </div> 
  <div class="col-md-3">
    <label>4</label>
    <input name="" value="<?php echo $wtd; ?> %" class="form-control" type="text" <?php echo $std; ?>>
    <br>
    <label <?php echo $stcod; ?>><?php echo $cosd; ?></label>
  </div> 
</div>
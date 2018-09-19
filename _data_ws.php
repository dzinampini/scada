<?php include('opendb.php');
  $ws_query = "SELECT * FROM water_supply ORDER BY id DESC  LIMIT 1 ";
  $ws_values=mysqli_query($con, $ws_query);
    $row=mysqli_fetch_array($ws_values);
    $council1 = $row['council1'];
    $council2 = $row['council2'];
    $borehole = $row['borehole'];

    $red = 'style="background-color:red;"'; 
    $green = 'style="background-color:green;"'; 

    if($council1 == 0){
      $sta = $red; 
      $council_text1 = 'OFF'; 
    }
      
    elseif($council1 == 1){
      $sta = $green; 
      $council_text1 = 'ON'; 
    }

    if($council2 == 0){
      $stc = $red; 
      $council_text2 = 'OFF'; 
    }
      
    elseif($council2 == 1){
      $stbc = $green; 
      $council_text2 = 'ON'; 
    }
      

    if($borehole == 0){
      $stb = $red;
      $borehole_text = 'OFF'; 
    }
       
    elseif($borehole == 1){
      $stb = $green; 
      $borehole_text = 'ON'; 
    }
      
  ?>

<div class="row">
  <div class="col-md-4">
    <label>Council 1</label>
    <input name="" value="<?php echo $council_text1; ?>" class="form-control" type="text" <?php echo $sta; ?>>
  </div>
  <div class="col-md-4">
    <label>Council 2</label>
    <input name="" value="<?php echo $council_text2; ?>" class="form-control" type="text" <?php echo $stc; ?>>
  </div>
  <div class="col-md-4">
    <label>Borehole</label>
    <input name="" value="<?php echo $borehole_text; ?>" class="form-control" type="text" <?php echo $stb; ?>>
  </div>
</div>

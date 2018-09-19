<?php include('opendb.php');
  $ws_query = "SELECT * FROM water_supply ORDER BY id DESC  LIMIT 1 ";
  $ws_values=mysqli_query($con, $ws_query);
    $row=mysqli_fetch_array($ws_values);
    $council = $row['council'];
    $borehole = $row['borehole'];

    $red = 'style="background-color:red;"'; 
    $green = 'style="background-color:green;"'; 

    if($council == 0){
      $sta = $red; 
      $council_text = 'OFF'; 
    }
      
    elseif($council == 1){
      $sta = $green; 
      $council_text = 'ON'; 
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
  <div class="col-md-6">
    <label>Council 1</label>
    <input name="" value="<?php echo $council_text; ?>" class="form-control" type="text" <?php echo $sta; ?>>
  </div>
  <div class="col-md-6">
    <label>Council 2</label>
    <input name="" value="<?php echo $borehole_text; ?>" class="form-control" type="text" <?php echo $stb; ?>>
  </div>
</div>

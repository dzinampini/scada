<?php include('opendb.php');
  $wt_query = "SELECT * FROM water_tanks ORDER BY id DESC  LIMIT 1 ";
  $wt_values=mysqli_query($con, $wt_query);
    $row=mysqli_fetch_array($wt_values);
    $wta = $row['a'];
    $wtb = $row['b'];
    $wtc = $row['c'];
    $wtd = $row['d']; 
    $wte = $row['e'];
    $wtf = $row['f'];
    $wtg = $row['g'];

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

    if($wte < 20 ) 
      $ste = $red; 
    else
      $ste = $green; 

    if($wtf < 20 ) 
      $stf = $red; 
    else
      $stf = $green; 

    if($wtg < 20 ) 
      $stg = $red; 
    else
      $stg = $green; 
  ?>

<div class="row">
  <div class="col-md-3">
    <label>Tank A</label>
    <input name="" value="<?php echo $wta; ?> %" class="form-control" type="text" <?php echo $sta; ?>>
  </div>
  <div class="col-md-3">
    <label>Tank B</label>
    <input name="" value="<?php echo $wtb; ?> %" class="form-control" type="text" <?php echo $stb; ?>>
  </div>
  <div class="col-md-3">
    <label>Tank C</label>
    <input name="" value="<?php echo $wtc; ?> %" class="form-control" type="text" <?php echo $stc; ?>>
  </div> 
  <div class="col-md-3">
    <label>Tank D</label>
    <input name="" value="<?php echo $wtd; ?> %" class="form-control" type="text" <?php echo $std; ?>>
  </div> 
  <div class="col-md-3">
    <label>Tank E</label>
    <input name="" value="<?php echo $wte; ?> %" class="form-control" type="text" <?php echo $ste; ?>>
  </div> 
  <div class="col-md-3">
    <label>Tank F</label>
    <input name="" value="<?php echo $wtf; ?> %" class="form-control" type="text" <?php echo $stf; ?>>
  </div> 
  <div class="col-md-3">
    <label>Tank G</label>
    <input name="" value="<?php echo $wtg; ?> %" class="form-control" type="text" <?php echo $stg; ?>>
  </div> 
</div>
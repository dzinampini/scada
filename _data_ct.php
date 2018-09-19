<?php include('opendb.php');
  $wt_query = "SELECT * FROM chemical_tanks ORDER BY id DESC  LIMIT 1 ";
  $wt_values=mysqli_query($con, $wt_query);
    $row=mysqli_fetch_array($wt_values);
    $wta = $row['a'];
    $wtb = $row['b'];
    $wtc = $row['c'];
    $wtd = $row['d']; 

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
  ?>

<div class="row">
  <div class="col-md-3">
    <label>Caustic A</label>
    <input name="" value="<?php echo $wta; ?> litres" class="form-control" type="text" <?php echo $sta; ?>>
  </div>
  <div class="col-md-3">
    <label>Caustic B</label>
    <input name="" value="<?php echo $wtb; ?> litres" class="form-control" type="text" <?php echo $stb; ?>>
  </div>
  <div class="col-md-3">
    <label>Acid A</label>
    <input name="" value="<?php echo $wtc; ?> litres" class="form-control" type="text" <?php echo $stc; ?>>
  </div> 
  <div class="col-md-3">
    <label>Acid B</label>
    <input name="" value="<?php echo $wtd; ?> litres" class="form-control" type="text" <?php echo $std; ?>>
  </div> 
</div>

    <!-- 
<div class="table-responsive">
          <table class="table">
            <tr>
              <th>Tank #</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>D</th>
              <th>E</th>
              <th>F</th>
              <th>G</th>
              <th>H</th>
              <th>I</th>
              <th>J</th>
              <th>K</th>
              <th>L</th>
            </tr>
            <tr>
              <th>Status</th>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
            </tr>

            <tr>
              <th>Value</th>
              <td></td>
              <td><?php //echo $wtb; ?></td>
              <td><?php //echo $wtc; ?></td>
              <td><?php //echo $wtd; ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div> -->
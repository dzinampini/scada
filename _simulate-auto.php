<?php 

include('opendb.php'); 

// wtaer tank values 
$wta = rand(80, 100); 
$wtb = rand(0, 100); 
$wtc = rand(0, 20); 
$wtd = rand(80, 100); 
$wte = rand(0, 100); 
$wtf = rand(0, 20); 
$wtg = rand(80, 100); 

// chiller values 
$ca = rand(20, 40); 
$cb = rand(20, 40); 
$cc = rand(20, 40); 
$cd = rand(20, 40); 

// compressor statuses 
$coa = rand(0,1);
$cob = rand(0,1);
$coc = rand(0,1);
$cod = rand(0,1);

//chemical tanks
$cta = rand(0,100);
$ctb = rand(20,70);
$ctc = rand(70,100);
$ctd = rand(90,100);

$water_tanks = "INSERT INTO water_tanks (a, b, c, d, e, f, g) VALUES('$wta','$wtb','$wtc','$wtd','$wte','$wtf','$wtg')";
$ins_wt = mysqli_query($con, $water_tanks); 

$chemical_tanks = "INSERT INTO chemical_tanks (a, b, c, d) VALUES('$cta','$ctb','$ctc','$ctd')";
$ins_ct = mysqli_query($con, $chemical_tanks); 

$chillers = "INSERT INTO chillers (a, b, c, d, aa, bb, cc, dd) VALUES('$ca','$cb','$cc','$cd', '1', '1', '0', '1')";
$ins_c = mysqli_query($con, $chillers); 


$compressors = "INSERT INTO compressors (aa, bb, cc, dd) VALUES('$coa','$cob','$coc','$cod')";
$ins_co = mysqli_query($con, $compressors); 

?>


<div class="table-responsive">
  <table class="table">
    <tr>
      <td>
        water tank a
        <br>
        <?php echo $wta; ?>
      </td>
      <td>
        wt b
        <br>
        <?php echo $wtb; ?>
      </td>
      <td>
        wt c
        <br>
        <?php echo $wtc; ?>
      </td>
      <td>
        wt d
        <br>
        <?php echo $wtd; ?>
      </td>
    </tr>
    <tr>
      <td>
        chemical tanks a
        <br>
        <?php echo $cta; ?>
      </td>
      <td>
        c t b
        <br>
        <?php echo $ctb; ?>
      </td>
      <td>
        c t c
        <br>
        <?php echo $ctc; ?>
      </td>
      <td>
        d t d
        <br>
        <?php echo $ctd; ?>
      </td>
    </tr>
    <tr>
      <td>
        chiller a
        <br>
        <?php echo $ca; ?>
      </td>
      <td>
        c b
        <br>
        <?php echo $cb; ?>
      </td>
      <td>
        c c
        <br>
        <?php echo $cc; ?>
      </td>
      <td>
        d d
        <br>
        <?php echo $cd; ?>
      </td>
    </tr>
    <tr>
      <td>
        compressor a
        <br>
        <?php echo $coa; ?>
      </td>
      <td>
        c b
        <br>
        <?php echo $cob; ?>
      </td>
      <td>
        c c
        <br>
        <?php echo $coc; ?>
      </td>
      <td>
        d d
        <br>
        <?php echo $cod; ?>
      </td>
    </tr>
  <table>
    <p>reloading this page  will be adding another set of values to DB
    <br>
    reloading this page is like device has visitied this link again with values 
      </p>

      <p><a href="update-values.php">Reload</a></p>  
      <p><a href="simulation.php">Go back to simulation page</a></p>   
</div>
<?php // chiller values 

include('opendb.php'); 

$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];
$c4 = $_GET['c4'];

$chemical_tanks = "INSERT INTO chemical_tanks (a, b, c, d) VALUES('$c1','$c2','$c3','$c4')";
$ins_ct = mysqli_query($con, $chemical_tanks); 

?>
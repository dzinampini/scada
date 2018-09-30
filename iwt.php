<?php // chiller values 

include('opendb.php'); 
$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];
$c4 = $_GET['c4'];
$c5 = $_GET['c5'];
$c6 = $_GET['c6'];
$c7 = $_GET['c7'];


$water_tanks = "INSERT INTO water_tanks (a, b, c, d, e, f, g) VALUES('$c1','$c2','$c3','$c4','$c5','$c6','$c7')";
$ins_wt = mysqli_query($con, $water_tanks); 

?>
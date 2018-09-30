<?php // chiller values 

include('opendb.php'); 

$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];

$water_supply = "INSERT INTO water_supply (council1, council2, borehole) VALUES('$c1','$c2','$c3')";
$ins_ws = mysqli_query($con, $water_supply); 

?>
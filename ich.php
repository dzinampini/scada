<?php // chiller values 

include('opendb.php'); 
$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];
$c4 = $_GET['c4'];
$cs1 = $_GET['cs1'];
$cs2 = $_GET['cs2'];
$cs3 = $_GET['cs3'];
$cs4 = $_GET['cs4'];


$chillers = "INSERT INTO chillers (a, b, c, d, aa, bb, cc, dd) VALUES('$c1','$c2','$c3','$c4', '$cs1', '$cs2', '$cs3', '$cs4')";
$ins_c = mysqli_query($con, $chillers); 

?>
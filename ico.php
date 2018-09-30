<?php // chiller values 

include('opendb.php'); 

$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];
$c4 = $_GET['c4'];
$c5 = $_GET['c5'];
$c6 = $_GET['c6'];


$compressors = "INSERT INTO compressors (aa, bb, cc, dd, ee, pressure) VALUES('$c1','$c2','$c3','$c4','$c5','$c6')";
$ins_co = mysqli_query($con, $compressors); 

?>
<?php include('_header.php'); 

$j = $_GET['j'];
$i = $_GET['i'];
$c = $_GET['c'];


// if ($m == 'accept'){
	$staff_insert = "UPDATE `customers` SET `balance`=balance-$c WHERE id='$i'"; 
	$rs = mysqli_query($con, $staff_insert);
	
// }

$staff_insert = "UPDATE `purchases` SET `status`='successful' WHERE id='$j'"; 

$rs = mysqli_query($con, $staff_insert); ?> 

<script>
       alert("Update made!");
       location = 'accounts.php';
      </script>
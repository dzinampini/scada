<?php 
function getBrokers($con){
	$rs = mysqli_query($con, "SELECT * FROM brokers ORDER BY fullname") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}


function getBroker($con, $thearg){
	$rs = mysqli_query($con, "SELECT * FROM brokers WHERE id ='$thearg'") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

function getCustomers($con){
	$rs = mysqli_query($con, "SELECT * FROM customers ORDER BY fullname") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}


function getCustomer($con, $thearg){
	$rs = mysqli_query($con, "SELECT * FROM customers WHERE id ='$thearg'") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

function getCustomerName($con, $thearg){
	$dept_sql = mysqli_query($con, "SELECT * FROM customers WHERE id = '$thearg'")or die(mysqli_error($con));
	while($row = mysqli_fetch_array($dept_sql)){
		return $row['fullname'];
	} 
}


function getCompanies($con){
	$rs = mysqli_query($con, "SELECT * FROM companies ORDER BY company") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}


function getCompany($con, $thearg){
	$rs = mysqli_query($con, "SELECT * FROM companies WHERE id ='$thearg'") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

function getCompanyName($con, $thearg){
	$dept_sql = mysqli_query($con, "SELECT * FROM companies WHERE id = '$thearg'")or die(mysqli_error($con));
	while($row = mysqli_fetch_array($dept_sql)){
		return $row['company'];
	} 
}

function getPayments($con){
	$rs = mysqli_query($con, "SELECT * FROM payments WHERE status=''") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

function getKnowledge($con){
	$rs = mysqli_query($con, "SELECT * FROM knowledge ORDER BY date_time") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

function getPurchases($con){
	$rs = mysqli_query($con, "SELECT * FROM purchases WHERE status=''") or die(mysqli_error($con));
	while($row = mysqli_fetch_array($rs)){
		$persons[]=$row; 
	} 
	return $persons;
}

 ?>
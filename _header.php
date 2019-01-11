<?php
session_start();

include 'config.php';
include 'model.php'; 

$username=$_SESSION['username'];


if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))) {
   ?> <script> 
        alert('You need to be logged in to access this page');
      </script><?php 
  header("location:login.php");
  exit;
}

$rs = mysqli_query($con, "SELECT * FROM brokers WHERE email = '$username'")or die(mysqli_error($con));

while($row = mysqli_fetch_array($rs)){
   $id=$row['id'];
   $username = $row['email'];
   $password = $row['password'];
   $fullname = $row['fullname'];
} ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $system_name; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $system_name; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="brokers.php">Manage Brokers</a></li>
      <li><a href="customers.php">Manage Customers</a></li>
      <li><a href="companies.php">Manage Companies & Price</a></li>
      <li><a href="knowledge.php">Investment Knowledgebase</a></li>
      <li><a href="accounts.php">Manage Accounts</a></li>
      <li><a href="purchases.php">Manage Share Purchases</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $fullname; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav> 
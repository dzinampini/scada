<?php
session_start();

include 'opendb.php';
$username=$_SESSION['username'];


if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))) {
   ?> <script> 
        alert('You need to be logged in to access this page');
      </script><?php 
  header("location:login.php");
  exit;
}

$rs = mysqli_query($con, "select * from users where email = '$username'")or die(mysqli_error($con));

while($row = mysqli_fetch_array($rs)){
   $id=$row['id'];
   $email = $row['email'];
   $password = $row['password'];
   $fullname = $row['fullname'];
   $role = $row['role'];
} ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dendairy SCADA System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<style>
  #wt-data, #ch-data, #co-data, #ws-data{
    display:none;
  }

  .item-view{
    padding:7px;
  }

  body{
    background-image:url('images/body_bg.jpg');
  }

  .container{
    background-color: white;
    min-height:1000px;
    /*margin:20px 20px 20px 20px;*/
  }
  .form-control{
    color:white;
  }
</style>

<body>


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dendairy Web Based SCADA System</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li> <!-- class="active" -->
      <li><a href="index.php"></a></li>
      <li><a href="simulation.php">Simulation (values)</a></li>
      <li><a href="real-time.php">Real Time View</a></li>
      <li><a href="reports.php">Reports</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav> 
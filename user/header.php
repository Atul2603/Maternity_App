<?php 
 session_start();
 if(!isset($_SESSION['patient_login']))
 { 
	session_destroy();
	echo "<script> window.location.href='../index.php'; </script>";
 }
include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Womens Hospital</title>
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
    	
       <div class="row" id="header">
       	 <div class="col-md-8">
       	 	<h3>Welcome : <?php echo $_SESSION['patient_login']; ?></h3>
       	 </div>
       	  
       	 
       </div>
<?php 
 session_start();
 include('config.php');
 if(!isset($_SESSION['doctor_user']))
 {
	 session_destroy();
	 header('location:index.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Womens Hospital</title>
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
    	
       <div class="row" id="header">
       	 <div class="col-md-8">
       	 	<h3>Welcome : <?php echo $_SESSION['doctor_user']; ?></h3>
       	 </div>
       	  <div class="col-md-2">
       	    <br />
       	 	<p>Today Date:<?php echo date('d/m/y'); ?></p>
       	 	
       	 </div>
       	 <div class="col-md-2">
       	    <a href="" class="btn btn-default" style="margin-top:12px;">New Enquiry</a>
       	 </div>
       </div>
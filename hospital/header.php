<?php 
 session_start();
 if(!isset($_SESSION['hospital_admin']))
 {
	 session_destroy();
	 header('location:../index.php');
 }
 include('config.php');
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
	<script type="text/javascript">
		 
		 function check()
		 {
		 	 var a = confirm('Are you sure to delete');
		 	 if(a==true)
		 	 {
		 	 	return true;
		 	 }
		 	 else 
		 	{
                return false;  
		 	}
		 }

	</script>
</head>
<body>
    <div class="container-fluid">
    	
       <div class="row" id="header">
       	 <div class="col-md-12">
       	 	<h3>Welcome : Admin</h3>
       	 </div>
       </div>
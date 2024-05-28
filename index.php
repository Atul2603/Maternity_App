<?php include('config.php'); ?>
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
		
		<div class="row" id="main_page">
			<div class="col-md-12" id="header">
			   
			    <a href="doctor/" class="btn btn-success pull-right" style="margin-top:10px;"><i class="fa fa-user-md "></i> Login</a>
			</div>
			<div class="col-md-6" id="left">
				<h2 class="text-center">Patient Login</h2>
				<hr />
				
				<div class="col-md-8 col-md-offset-2"> 
				<?php 
				   if(isset($_POST['patient_login']))
				   { 
					   if($_POST['username']!='' && $_POST['password']!='')
					   {
					   $username = $_POST['username'];
					   $password = $_POST['password'];
					   
					   $qry ="select * from new_profile where email='$username' && password='$password'";
					   
					   $ex = mysqli_query($con,$qry);
				       
					   $rs = mysqli_fetch_array($ex);  
					   
					   if($rs['email']==$username && $rs['password']==$password)
					   {
						   session_start();
						   $_SESSION['patient_login'] = $username;
						   header('location:user/dashboard.php');
					   }
					   else 
					   {
						   echo "<script> alert('Wrong Username & Password'); </script>";
					   }
					   }
					   else {
						   echo "Please fill the value";
					   }
				   }
				 	
				?>
				<form action="" method="post">
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="username" id="" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group text-center">
						<input type="submit" value="Login" name="patient_login" class="btn btn-default">
					</div>
				</form>
				</div>
			</div>
			<div class="col-md-6" id="right">
				<h2 class="text-center">Hospital Login</h2>
				<hr />
				<div class="col-md-8 col-md-offset-2"> 
				<?php 
				   if(isset($_POST['hospital_login']))
				   { 
					   if($_POST['username']!='' && $_POST['password']!='')
					   {
					   $username = $_POST['username'];
					   $password = $_POST['password'];
					   
					   $qry ="select * from admin where username='$username' && password='$password'";
					   
					   $ex = mysqli_query($con,$qry);
				       
					   $rs = mysqli_fetch_array($ex);  
					   
					   if($rs['username']==$username && $rs['password']==$password)
					   {
						   session_start();
						   $_SESSION['hospital_admin'] = $username;
						   header('location:hospital/dashboard.php');
					   }
					   else 
					   {
						   echo "<script> alert('Wrong Username & Password'); </script>";
					   }
					   }
					   else {
						   echo "Please fill the value";
					   }
				   }
				 	
				?>
				<form action="" method="post">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" id="" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group text-center">
						<input type="submit" value="Login" name="hospital_login" class="btn btn-default">
					</div>
				</form>
				</div>
			</div>
			
		</div>
		
		
	</div><!-- End of Container Fluid -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
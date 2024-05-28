<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<style>
  body 
  {
	   background: url('img/bg.jpg');
	   background-size:cover;
  }
</style>
	</head>
<body>
   <div class="container">
   	
   	   <div class="row">
   	   	  
   	   	   <div class="col-md-6 col-md-offset-3">
   	   	   
   	   	      <h2 class="text-center">Doctor Login</h2>
   	   	      <hr />
   	   	      <?php 
			     if(isset($_POST['login']))
				 {
					 if($_POST['email']!='' && $_POST['password']!='')
					 {
					 $email = $_POST['email'];
					 $password = $_POST['password'];
				     
					 $qry ="select * from doctor where email='$email' && password='$password'";
					 
					 $ex = mysqli_query($con,$qry);
					 
					 $res = mysqli_fetch_array($ex);
					 
					 if($res['email']==$email && $res['password']==$password)
					 {
						 session_start();
						 $_SESSION['doctor_user'] = $email;
						 echo "<script> window.location.href='dashboard.php'; </script>";
					 }
					 else
					 {
						 echo "<script> alert('Wrong Username & Password'); </script>";
					 }
					 }
					 else
					 {
						 echo "<script> alert('Please Enter Username & Password'); </script>";
					 }
				 }
			   
			  ?>
   	   	      <form action="" method="post">
   	   	      	<div class="form-group">
   	   	      		<label for="">Email</label>
   	   	      		<input type="text" name="email" id="" class="form-control">
   	   	      	</div>
   	   	      	<div class="form-group">
   	   	      		<label for="">Password</label>
   	   	      		<input type="password" name="password" id="" class="form-control">
   	   	      	</div>
   	   	      	<div class="form-group">
   	   	      		<input type="submit" name="login" value="Login" class="btn btn-success btn-block">
   	   	      	</div>
   	   	      </form>
   	   	   	
   	   	   </div>
   	   	
   	   	
   	   </div>
   	
   	
   </div>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
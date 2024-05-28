<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Change Password</h3>
       			</div>
       			<div class="panel-body">
       			  <div class="col-md-5">
       			  <?php 
					  
					  if(isset($_POST['change_pass']))
					  {
						  $o= $_POST['opass']; 
						  $n= $_POST['npass']; 
						  $c= $_POST['cpass'];
						  
						  $qry ="select * from new_profile where email='".$_SESSION['patient_login']."' && password='$o'";
						  
						  $ex = mysqli_query($con,$qry);
						  
						  $res = mysqli_fetch_array($ex);
					      
						  if($res['password']==$o)
						  {
							   
							  if($n!=$o && $c!=$o)
							  {
								    if($n==$c)
									{
										 $up ="update new_profile set password='$n' where email='".$_SESSION['patient_login']."'";
										
										 $e = mysqli_query($con,$up);
									     
										 if($e>0)
										 {
											 echo "<script> alert('Update Password Successful'); </script>";
										 }
									}
								  else 
								  {
									  echo "<script> alert('New & Confirm Password Should be Same'); </script>";
								  }
							  }
							  else
							  {
								  echo "<script> alert('Old Password Does Not Match with Confirm or New Password'); </script>";
							  }
							  
						  }
						  else
						  {
							  echo "<script> alert('Old Password is Wrong'); </script>";
						  }
					  }
					  
				  ?>
       				<form action="" method="post">
       					 <div class="form-group">
       					 	<label for="">Current Password</label>
       					 	<input type="password" name="opass" id="" class="form-control" placeholder="Current Password">
       					 </div>
       					  <div class="form-group">
       					 	<label for="">New Password</label>
       					 	<input type="password" name="npass" id="" class="form-control" placeholder="Old Password">
       					 </div>
       					  <div class="form-group">
       					 	<label for="">Confirm Password</label>
       					 	<input type="password" name="cpass" id="" class="form-control" placeholder="New Password">
       					 </div>
       					  <div class="form-group">
       					 	<input type="submit" name="change_pass"  value="Change Password" id="" class="btn btn-success ">
       					 </div>
       				</form>
       				</div>
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
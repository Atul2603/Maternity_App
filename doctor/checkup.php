<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Checkup Details</h3>
       			</div>
       			<div class="panel-body">
       			  <?php
					
					if(isset($_POST['add_checkup']))
					{
						$w = $_POST['weight'];
						$bg = $_POST['bg'];
						$hiv = $_POST['hiv'];
						$bp = $_POST['bp'];
						$status = $_POST['status'];
						$tokenid = $_GET['tokenid'];
						
						$qry ="select did from doctor where email='".$_SESSION['doctor_user']."'";
						$ex = mysqli_query($con,$qry);
						$rs = mysqli_fetch_array($ex);
					    $did = $rs['did'];
						
						$ins = "insert into basic_checkup(tokenid,weight,bloodgroup,hivtest,bp,did) values('$tokenid','$w','$bg','$hiv','$bp','$did')";
						
						$e = mysqli_query($con,$ins);
						if($e>0)
						{
							
							$up = "update new_profile set status='$status' where tokenid='$tokenid'";
							
							$e1 = mysqli_query($con,$up);
							
							if($e1>0)
							{
								echo "<script> alert('Save Information Successful'); </script>";
							}
							
						}
					}
					
					
				 ?>
       			  <form action="" method="post">
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Weight </label>
       			  	  	<input type="text" name="weight" id="" class="form-control">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	
       			  	  	
       			  	  	<label for="">Blood Group</label>
       			  	  	<select name="bg" id="" class="form-control">
       			  	  		<option value="">Select Blood Group</option>
       			  	  		<option value="B+">B+</option>
       			  	  		<option value="A+">A+</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
       			  	  	</select>
       			  	  	
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<h5>HIV Test</h5>
       			  	  	<label for="">
       			  	  		<input type="radio" name="hiv" value="Positive"> Positive
       			  	  		<input type="radio" name="hiv" value="Negative"> Negative
							
       			  	  	</label>
       			  	  	
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<h5>Blood Pressure</h5>
       			  	  	<label for="">
       			  	  		<input type="radio" name="bp" value="low"> Low
       			  	  		<input type="radio" name="bp" value="High"> High
							<input type="radio" name="bp" value="Medium"> Medium
       			  	  	</label>
       			  	  	
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Status</label>
       			  	  	<select name="status" id="" class="form-control">
       			  	  		<option value="">Select Status</option>
       			  	  		<option value="pending">Pending</option>
       			  	  		<option value="checked">Checked</option>
							
       			  	  	</select>
       			  	  	
       			  	  </div>
       			  	  
       			  	  <div class="form-group col-md-12">
       			  	  	<input type="submit" value="Submit" name="add_checkup" class="btn btn-success">
       			  	  </div>
       			  </form>
       				
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Profile</h3>
       			</div>
       			<div class="panel-body">
       				<?php 
					  $email = $_SESSION['patient_login'];
					  $qry ="select * from new_profile where email='$email'";
					  $ex = mysqli_query($con,$qry);
					  $rs = mysqli_fetch_array($ex);
					  
					?>
      			 
      			 <table class="table table-bordered table-striped">
      			 	<tr>
      			 		<th>Name</th>
      			 		<td><?php echo $rs['name']; ?></td>
      			 		<th>Email</th>
      			 		<td><?php echo $rs['email']; ?></td>
      			 	</tr>
      			 	<tr>
      			 		<th>Contact</th>
      			 		<td><?php echo $rs['contact']; ?></td>
      			 		<th>Mother Name</th>
      			 		<td><?php echo $rs['mother']; ?></td>
      			 	</tr>
      			 	<tr>
      			 		<th>Father Name</th>
      			 		<td><?php echo $rs['father']; ?></td>
      			 		<th>Age</th>
      			 		<td><?php echo $rs['age']; ?></td>
      			 	</tr>
      			 	<tr>
      			 		<th>TokenID</th>
      			 		<td><?php echo $rs['tokenid']; ?></td>
      			 		<th>Dob</th>
      			 		<td><?php echo $rs['dob']; ?></td>
      			 	</tr>
      			 	<tr>
      			 		<th>Regitration Date</th>
      			 		<td><?php echo $rs['reg_date']; ?></td>
      			 		<td></td>
      			 		<td></td>
      			 	</tr>
      			 </table>
      			
      			
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
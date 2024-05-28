<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Dashboard</h3>
       			</div>
       			<div class="panel-body">
       			   
       			 <table class="table">
       			 	 
       			 	 <tr>
       			 	 	<td>Pending Checkup</td>
       			 	 	<td>
						<?php 
						$q1 ="select * from new_profile where status='pending'";
						echo mysqli_num_rows(mysqli_query($con,$q1));
						?>
       			 	 	</td>
       			 	 	<td>Done Checkup</td>
       			 	 	<td>
       			 	 	<?php 
						$q1 ="select * from new_profile where status='checked'";
						echo mysqli_num_rows(mysqli_query($con,$q1));
						?>
       			 	 	</td>
       			 	 </tr>
       			 	 <tr>
       			 	 	<td>Total Registration</td>
       			 	 	<td>
						<?php 
						$q1 ="select * from new_profile";
						echo mysqli_num_rows(mysqli_query($con,$q1));
						?>
       			 	 	</td>
       			 	 	<td>Total Doctors</td>
       			 	 	<td>
       			 	 	<?php 
						$q1 ="select * from doctor";
						echo mysqli_num_rows(mysqli_query($con,$q1));
						?>
       			 	 	</td>
       			 	 </tr>
       			 	
       			 </table>
       				
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
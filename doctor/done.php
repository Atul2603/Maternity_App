<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Completed Enquiry</h3>
       			</div>
       			<div class="panel-body">
       				<table class="table">
       				<tr>
       					<th>TokenID</th>
       					<th>Name</th>
       					<th>Email</th>
       					<th>Contact</th>
       					<th>Age</th>
       					<th>Problem</th>
       					<th>Status</th>
       					<th>Action</th>
       					
       				</tr>
       			
       			 <?php 
					
					$qry ="select * from new_profile where did=(select did from doctor where email='".$_SESSION['doctor_user']."') && status='checked'";
					
					$ex = mysqli_query($con,$qry);
					
					while($rs = mysqli_fetch_array($ex))
					{
				   ?>
				    <tr>
				    	<td><?php echo $rs['tokenid']; ?></td>
				    	<td><?php echo $rs['name']; ?></td>
				    	<td><?php echo $rs['email']; ?></td>
				    	<td><?php echo $rs['contact']; ?></td>
				    	<td><?php echo $rs['age']; ?></td>
				    	<td><?php echo $rs['problem']; ?></td>
				    	<td><?php echo $rs['status']; ?></td>
				    	<td><a href="report.php?tokenid=<?php echo $rs['tokenid']; ?>" class="btn btn-success btn-sm">Report</a></td>
				    	
				    </tr>
				   	
				   <?php	
					}
					
					?>
       				</table>
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
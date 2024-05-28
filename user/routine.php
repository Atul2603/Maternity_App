<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Week Test Report</h3>
       			</div>
       			<div class="panel-body">
       			<?php 
				 $user = $_SESSION['patient_login'];
					  $q ="select tokenid from new_profile where email='$user'";
					  $ex = mysqli_query($con,$q);
					  $r1 = mysqli_fetch_array($ex);
					  $tokenid = $r1['tokenid'];	
				?>
       			<h3>Weekwise Test</h3>
      			  	<table class="table">
      			  		<tr>
      			  			<th>Sno</th>
      			  			<th>Test Name</th>
      			  			<th>Notice</th>
      			  			<th>Description</th>
      			  			<th>Status</th>
      			  			<th>Checkup Date</th>
      			  			
      			  		</tr>
      			  		<?php 
						 $qry ="select * from month_fill mf JOIN month_test mt ON mf.mid=mt.mid where tokenid='$tokenid'";
					     $ex = mysqli_query($con,$qry);
						$i=1; 
						while($rs = mysqli_fetch_array($ex))
						 {
						?>
      			  		<tr>
      			  			<td><?php echo $i; ?></td>
      			  			<td><?php echo $rs['test_name']; ?></td>
      			  			<td><?php echo $rs['description']; ?></td>
      			  			<td><?php echo $rs['mfdescription']; ?></td>
      			  			<td><?php echo $rs['mfstatus']; ?></td>
      			  			<td><?php echo $rs['mfdate']; ?></td>
      			  		</tr>
      			  		<?php
							$i++;
						 }
						?>
      			  	</table>
       				
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
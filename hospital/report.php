<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Report</h3>
       			</div>
       			
       			<div class="panel-body">
       				<a href="all_reg.php" class="btn btn-success btn-sm">Back</a>
       				<?php 
					 $id = $_GET['tokenid'];
					 $qry ="select * from basic_checkup where tokenid='$id'";
					 $ex = mysqli_query($con,$qry);
					 $rs = mysqli_fetch_array($ex);
				  ?>
      			   <table class="table table-bordered">
      			   	<tr>
      			   		<td>Weight</td>
      			   		<td><?php echo $rs['weight']; ?></td>
      			   		<td>Blood Group</td>
      			   		<td><?php echo $rs['bloodgroup']; ?></td>
      			   	</tr>
      			   	<tr>
      			   		<td>HIV Test</td>
      			   		<td><?php echo $rs['hivtest']; ?></td>
      			   		<td>Blood Pressure</td>
      			   		<td><?php echo $rs['bp']; ?></td>
      			   	</tr>
      			   	
      			   </table>
      			   
      			  <h3>More Test Details</h3>
      			  <div class="col-md-12 table-responsive" style="overflow:scroll; height:300px;">
      			  	
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
						 $qry ="select * from fill f JOIN checkup c ON f.checkupid=c.checkupid where tokenid='$id'";
					     $ex = mysqli_query($con,$qry);
						$i=1; 
						while($rs = mysqli_fetch_array($ex))
						 {
						?>
      			  		<tr>
      			  			<td><?php echo $i; ?></td>
      			  			<td><?php echo $rs['c_name']; ?></td>
      			  			<td><?php echo $rs['c_description']; ?></td>
      			  			<td><?php echo $rs['description']; ?></td>
      			  			<td><?php echo $rs['c_status']; ?></td>
      			  			<td><?php echo $rs['c_date']; ?></td>
      			  		</tr>
      			  		<?php
							$i++;
						 }
						?>
      			  	</table>
      			  	
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
						 $qry ="select * from month_fill mf JOIN month_test mt ON mf.mid=mt.mid where tokenid='$id'";
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
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Dashboard</h3>
       			</div>
       			<div class="panel-body">
				  
				  <form action="" method="post" class="form-inline">
				      
					  <div class="form-group">
					   <label>Enter Patient OPD NO</label>
					   <input type="text" name="token" class="form-control" />
					  </div>
					  <div class="form-group">
					   <input type="submit" name="search" class="btn btn-success" />
					  </div>
				    
				  </form>
				 
				
       				<?php 
					  
					  if(isset($_POST['search']))
					  {
						  
					 
					 
					  $tokenid = $_POST['token'];
					
					?>
      			  <div class="col-md-12 table-responsive" style="overflow:scroll; height:500px;">
				 
				<h3>Basic Checkup</h3>
				<?php 
					 
					 $qry ="select * from basic_checkup where tokenid='$tokenid'";
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
      			  	<h3>Test Completed Report</h3>
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
						 $qry ="select * from fill f JOIN checkup c ON f.checkupid=c.checkupid where tokenid='$tokenid'";
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
      			  	<h3>Pending Test</h3>
      			  	<table class="table">
      			  		<tr>
      			  			<th>Sno</th>
      			  			<th>Test Name</th>      			  			
      			  			<th>Description</th>
      			  			<th>Type</th>
      			  			
      			  			
      			  		</tr>
      			  		<?php 
						 $qry ="select * from checkup where checkupid NOT IN(select checkupid from fill where tokenid='$tokenid')";
					     $ex = mysqli_query($con,$qry);
						$i=1; 
						while($rs = mysqli_fetch_array($ex))
						 {
						?>
      			  		<tr>
      			  			<td><?php echo $i; ?></td>
      			  			<td><?php echo $rs['c_name']; ?></td>
      			  			<td><?php echo $rs['c_description']; ?></td>
      			  			<td><?php echo $rs['type']; ?></td>
      			  			
      			  		</tr>
      			  		<?php
							$i++;
						 }
						?>
      			  	</table>
					<?php 
					  }
					?>
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
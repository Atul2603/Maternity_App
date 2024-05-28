<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>All Registration Details</h3>
       				
       				<form action="" method="post" class="form-inline">
       					<div class="form-group">
       						<input type="text" name="nm" id="" class="form-control" placeholder="Enter Registration No OR Name">
       					</div>
       					<div class="form-group">
       						<input type="submit" value="Search" name="search" class="btn btn-default">
       					</div>
       				</form>
       			</div>
       			<div class="panel-body">
       				<table class="table">
       					<tr>
       						<th>Sno</th>
       						<th>Registration No.</th>
       						<th>Patient Name</th>
       						<th>Action</th>
       					</tr>
       					<?php 
					  
					  if(isset($_POST['search']))
					  {
						   $name = $_POST['nm'];
						   $q ="select * from new_profile where tokenid='$name' or name LIKE '%$name%'";
						  
						   $ex = mysqli_query($con,$q);
					       $j=1;
						   while($rs = mysqli_fetch_array($ex))
						   {
                      ?>
                      <tr>
       						<td><?= $j; ?></td>
       						<td><?php echo $rs['tokenid']; ?></td>
       						<td><?php echo $rs['name']; ?></td>
       						<td>
     						
      						    <a href="report.php?tokenid=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Report</a> 
       						    <a href="update_profile.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Profile</a> 
       				
       						    <a href="checkup.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Checkup</a>
       						     <a href="week_checkup.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Weekly Checkup</a>
       						</td>
       					</tr>
                      <?php	
							   $j++;
						   }
					  
					  }
						else
						{
							
						
					
					
					?>
       					<?php 
						 $qry ="select * from new_profile";
						 $ex = mysqli_query($con,$qry);
						 
						$i=1;
						while($rs = mysqli_fetch_array($ex))
						 {
						?>
						  
						<tr>
       						<td><?= $i; ?></td>
       						<td><?php echo $rs['tokenid']; ?></td>
       						<td><?php echo $rs['name']; ?></td>
       						<td>
     						  
      						    <a href="report.php?tokenid=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Report</a> 
       						    <a href="update_profile.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Profile</a> 
       						 
       						    <a href="checkup.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Checkup</a>
       						    <a href="week_checkup.php?token=<?php echo $rs['tokenid']; ?>" class="btn btn-default btn-sm">Weekly Checkup</a>

                                              <a href="delete.php?tokenid=<?php echo $rs['tokenid']; ?>" class="btn btn-default" onclick="return check();">Delete</a>
       						</td>
       					</tr>
						<?php
							$i++;
						 }
						?>
       				 <?php 
						}
					 ?>
       				</table>
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
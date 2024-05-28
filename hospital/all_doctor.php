<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>All Doctor Details</h3>
       				
       				<form action="" method="post" class="form-inline">
       					<div class="form-group">
       						<input type="text" name="nm" id="" class="form-control" placeholder="Search by Name">
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
       						<th>Doctor Name</th>
       						<th>Mobile No</th>
       						<th>Action</th>
       					</tr>
       					<?php 
					  
					  if(isset($_POST['search']))
					  {
						   $name = $_POST['nm'];
						   $q ="select * from doctor where name LIKE '%$name%'";
						  
						   $ex = mysqli_query($con,$q);
					       $j=1;
						   while($rs = mysqli_fetch_array($ex))
						   {
                      ?>
                      <tr>
       						<td><?= $j; ?></td>
       						<td><?php echo $rs['name']; ?></td>
       						<td><?php echo $rs['contact']; ?></td>
       						<td>
     						    <a href="delete.php?doc_del=<?php echo $rs['did']; ?>" class="btn btn-danger btn-sm" onclick="return check();">Delete</a>
     						    <a href="" class="btn btn-warning btn-sm">Edit</a>
     						    <a href="" class="btn btn-info btn-sm">View</a>
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
						 $qry ="select * from doctor";
						 $ex = mysqli_query($con,$qry);
						 
						$i=1;
						while($rs = mysqli_fetch_array($ex))
						 {
						?>
						  
						<tr>
       						<td><?= $i; ?></td>
       						<td><?php echo $rs['name']; ?></td>
       						<td><?php echo $rs['contact']; ?></td>
       						<td>
     						    <a href="delete.php?doc_del=<?php echo $rs['did']; ?>" class="btn btn-danger btn-sm" onclick="return check();">Delete</a>
     						    <a href="edit.php?did=<?php echo $rs['did']; ?>" class="btn btn-warning btn-sm">Edit</a>
     						    <a href="view_doc.php?did=<?php echo $rs['did']; ?>" class="btn btn-info btn-sm">View</a>
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
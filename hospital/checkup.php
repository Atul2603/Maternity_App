<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Important Checkups</h3>
       			</div>
       			<div class="panel-body">
       			  
       			 <div class="table-responsive" style="overflow:scroll; height:450px;">   
       			 <table class="table">
       			 	<tr>
       			 		<th>Sno</th>
       			 		<th>Test Name</th>
       			 		<th>Description</th>
       			 		<th>Type</th>
       			 		<th>Action</th>
       			 		
       			 	</tr>
       			 	<?php 
					  $qry ="select * from checkup";
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
       			 		<td><a href="fill.php?tokenid=<?php echo $_GET['token']; ?>&&checkupid=<?php echo $rs['checkupid']; ?>" class="btn btn-success btn-sm">Fill</a></td>
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
<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Report</h3>
       			</div>
       			
       			<div class="panel-body">
       				<a href="done.php" class="btn btn-success btn-sm">Back</a>
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
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
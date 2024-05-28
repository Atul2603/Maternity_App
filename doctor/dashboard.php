<?php include('header.php'); ?>
      <!-- End of Header -->
      <?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		
       		<div class="panel">
       			<div class="panel-heading">
       				<h3>Dashboard</h3>
       			</div>
       			<div class="panel-body">
       				<?php 
					 
					 $qry ="select * from doctor where email='".$_SESSION['doctor_user']."'";
					 $ex = mysqli_query($con,$qry);
					 $rs = mysqli_fetch_array($ex);
				  ?>
      			   <table class="table table-bordered">
      			   	<tr>
      			   		<td>Name</td>
      			   		<td><?php echo $rs['name']; ?></td>
      			   		<td>Email</td>
      			   		<td><?php echo $rs['email']; ?></td>
      			   	</tr>
      			   	<tr>
      			   		<td>Contact</td>
      			   		<td><?php echo $rs['contact']; ?></td>
      			   		<td>Degree</td>
      			   		<td><?php echo $rs['degree']; ?></td>
      			   	</tr>
      			   		<tr>
      			   		<td>Description</td>
      			   		<td><?php echo $rs['description']; ?></td>
      			   		<td>Room No</td>
      			   		<td><?php echo $rs['room_no']; ?></td>
      			   	</tr>
      			   		<tr>
      			   		<td></td>
      			   		<td></td>
      			   		<td>Dutytime</td>
      			   		<td><?php echo $rs['dutytime']; ?></td>
      			   	</tr>
      			   	
      			   </table>
       			</div>
       		</div>
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>       
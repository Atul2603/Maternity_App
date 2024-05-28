<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Fill Checkup Report</h3>
       			</div>
       			<div class="panel-body">
      			   <?php 
					  
					 $token = $_GET['tokenid'];
					 $cid = $_GET['checkupid'];
					 
					 $qry ="select * from fill where tokenid='$token' && checkupid='$cid'";
					 $r = mysqli_num_rows(mysqli_query($con,$qry));
					 if($r>0)
					 {
						 echo "<script> alert('This Checkup Already Done'); window.location.href='checkup.php?token=$token'; </script>";
					 }
					 else 
					 {
						 if(isset($_POST['add_checkup']))
						 {
							 $token = $_GET['tokenid'];
							 $cdate = $_POST['cdate'];
							 $status = $_POST['status'];
							 $cdescription = $_POST['description'];
							 
							 $ins = "insert into fill(tokenid,checkupid,c_date,c_status,description) values('$token','$cid','$cdate','$status','$cdescription')";
							 
							 $ex = mysqli_query($con,$ins);
						     
							 if($ex>0)
							 {
								 echo "<script> alert('Save Details'); window.location.href='checkup.php?token=$token'; </script>";
							 }
						 }
					?>
					<form action="" method="post">
       			   	<div class="form-group col-md-6">
       			   		<label for="">Checkup Date</label>
       			   		<input type="date" name="cdate" id="" class="form-control">
       			   	</div>
       			   	<div class="form-group col-md-6">
       			   		<label for="">Status</label>
       			   		<select name="status" id="" class="form-control">
       			   			<option value="">Select Status</option>
       			   			<option value="Done">Done</option>
       			   			<option value="Pending">Pending</option>
       			   		</select>
       			   	</div>
       			   	<div class="col-md-12">
       			   		<label for="">Description</label>
       			   		<textarea name="description" class="form-control"></textarea>
       			   	</div>
       			   		<div class="col-md-12">
       			   		<br/ >
       			   		<input type="submit" value="Submit" name="add_checkup" class="btn btn-success">
       			   	</div>
       			   </form>
				    <?php	 
					 }
				   ?>
       			   
       			
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
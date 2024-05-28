<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Update Profile</h3>
       			</div>
       			<div class="panel-body">
       			  <?php 
					 if(isset($_GET['token']))
					 {
						  $tid = $_GET['token'];
						  $qry = "select * from new_profile where tokenid='$tid'";
						  $ex = mysqli_query($con,$qry);
					      $rs = mysqli_fetch_array($ex);
						 
						 if(isset($_POST['update']))
						 {
							 $data = array('name'=>$_POST['name'],
								'email'=>$_POST['email'],
								'contact'=>$_POST['contact'],
								'mother'=>$_POST['mother'],
								'father'=>$_POST['father'],
								'age'=>$_POST['age'],
								'problem'=>$_POST['problem'],								
								'dob'=>$_POST['dob']
								);
							$qry ="update new_profile set";

							$key = array_keys($data); // name,email,contact
							$val = array_values($data); //abc,abc@gmail.ocm, 3434

							$size = count($key);
							$i=0;

							foreach($data as $d)
							{
							if($i+1==$size)
							{
							$qry .=" ".$key[$i]."='".$val[$i]."'";
							$i++;
							}
							else 
							{
							$qry .=" ".$key[$i]."='".$val[$i]."',";
							$i++;
							}

							}

							$qry .=" where tokenid='$tid'";

							$ex = mysqli_query($con,$qry);
							 
							if($ex>0)
							{
								echo "<script> alert('Update Data Successful'); window.location.href='all_reg.php'; </script>";
							}
							 

							 
						 }
					 }
					?>
       			  <form action="" method="post">
       			  	  
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Patient Name</label>
       			  	  	<input type="text" name="name" value="<?php echo $rs['name']; ?>" id="" class="form-control" placeholder="Enter Patient Name">
       			  	  </div>
       			  	    <div class="form-group col-md-6">
       			  	  	<label for="">Patient Email</label>
       			  	  	<input type="email" name="email" value="<?php echo $rs['email']; ?>" id="" class="form-control" placeholder="Enter Patient Email">
       			  	  </div>
       			  	   <div class="form-group col-md-6">
       			  	  	<label for="">Contact Number</label>
       			  	  	<input type="text" name="contact" value="<?php echo $rs['contact']; ?>" id="" class="form-control" placeholder="Enter Mobile Number">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Mother Name</label>
       			  	  	<input type="text" name="mother" value="<?php echo $rs['mother']; ?>" id="" class="form-control" placeholder="Mother Name">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Father Name</label>
       			  	  	<input type="text" name="father" value="<?php echo $rs['father']; ?>" id="" class="form-control" placeholder="Father Name">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Patient Age</label>
       			  	  	<input type="text" name="age" id="" value="<?php echo $rs['age']; ?>" class="form-control" placeholder="Enter Your age">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Problem</label>
       			  	  	<input type="text" name="problem" value="<?php echo $rs['problem']; ?>" id="" class="form-control" placeholder="Enter Your Problem">
       			  	  </div>
       			  	  
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Dob</label>
       			  	  	<input type="date" name="dob" id="" value="<?php echo $rs['dob']; ?>" class="form-control">
       			  	  </div>
       			  	  
       			  	  <div class="form-group col-md-12 text-center">
       			  	    <input type="submit" name="update" value="Update" class="btn btn-default" />
       			  	  </div>
       			  	
       			  </form>
       				
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
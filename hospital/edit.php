<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Update doctor profile</h3>
       			</div>
       			<div class="panel-body">
      			  	
      			  	<div class="col-md-8">
      			  	<?php 
					 if(isset($_GET['did']))	
					  {
						  $id = $_GET['did'];
						  $q = "select * from doctor where did='$id'";
						  $r = mysqli_query($con,$q);
                          $result = mysqli_fetch_array($r);
						 
							if(isset($_POST['update_doctor']))
							{
							    $data = array('name'=>$_POST['dname'],
								'email'=>$_POST['demail'],
								'contact'=>$_POST['dcontact'],
								'degree'=>$_POST['ddegree'],
								'description'=>$_POST['description'],
								'room_no'=>$_POST['roomno'],
								'password'=>'DOC'.mt_rand(),
								'dutytime'=>$_POST['dutytime']
								);
							$qry ="update doctor set";

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

							$qry .=" where did='$id'";

							$ex = mysqli_query($con,$qry);
							 
							if($ex>0)
							{
								echo "<script> alert('Update Data Successful'); window.location.href='all_doctor.php'; </script>";
							}
							 
							}
						 
						 
						 
					  }	
					  
						
					  
					?>
      			  	<form action="" method="post">
       			  	<div class="form-group col-md-6">
       			  		<label for="">Doctor Name</label>
       			  		<input type="text" name="dname" id="" value="<?php echo $result['name']; ?>" class="form-control">
       			  	</div>
       			  
       			  	<div class="form-group col-md-6">
       			  		<label for="">Email</label>
       			  		<input type="email" name="demail" id="" value="<?php echo $result['email']; ?>" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Contact</label>
       			  		<input type="text" name="dcontact" id="" value="<?php echo $result['contact']; ?>" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Degree</label>
       			  		<input type="text" name="ddegree" id="" value="<?php echo $result['degree']; ?>" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Room No.</label>
       			  		<input type="text" name="roomno" id="" value="<?php echo $result['room_no']; ?>" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Duty on Time</label>
       			  		<input type="text" name="dutytime" id="" value="<?php echo $result['dutytime']; ?>" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-12">
       			  		<label for="">Description</label>
       			  		<textarea name="description" class="form-control">
       			  			<?php echo $result['description']; ?>
       			  		</textarea>
       			  	</div>
       			  	<div class="form-group col-md-12">
       			  		<input type="submit" value="Update" name="update_doctor" class="btn btn-default">
       			  	</div>
       			  	</form>
       			  	
       			  	</div>
       			  	
       			  </div>
       			  
       				
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Add New Doctor Profile</h3>
       			</div>
       			<div class="panel-body">
      			  	
      			  	<div class="col-md-8">
      			  	<?php 
					  if(isset($_POST['add_doctor']))
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
				
				 $key = implode(",",array_keys($data));
				 $value = implode("','",array_values($data));
				
				 $qry ="insert into doctor($key) values('$value')";
				
				 if(mysqli_query($con,$qry))
				 {
					 echo "<script> alert('Registration Successful'); </script>";
				 }
					  }
					?>
      			  	<form action="" method="post">
       			  	<div class="form-group col-md-6">
       			  		<label for="">Doctor Name</label>
       			  		<input type="text" name="dname" id="" class="form-control">
       			  	</div>
       			  
       			  	<div class="form-group col-md-6">
       			  		<label for="">Email</label>
       			  		<input type="email" name="demail" id="" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Contact</label>
       			  		<input type="text" name="dcontact" id="" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Degree</label>
       			  		<input type="text" name="ddegree" id="" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Room No.</label>
       			  		<input type="text" name="roomno" id="" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-6">
       			  		<label for="">Duty on Time</label>
       			  		<input type="text" name="dutytime" id="" class="form-control">
       			  	</div>
       			  	<div class="form-group col-md-12">
       			  		<label for="">Description</label>
       			  		<textarea name="description" class="form-control"></textarea>
       			  	</div>
       			  	<div class="form-group col-md-12">
       			  		<input type="submit" value="Save" name="add_doctor" class="btn btn-default">
       			  	</div>
       			  	</form>
       			  	
       			  	</div>
       			  	
       			  </div>
       			  
       				
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
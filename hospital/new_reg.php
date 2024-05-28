<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>New Patient Registration</h3>
       			</div>
       			<div class="panel-body">
       			
       			  <form action="reciept.php" method="post">
       			  	  
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Patient Name</label>
       			  	  	<input type="text" name="name" id="" class="form-control" placeholder="Enter Patient Name">
       			  	  </div>
       			  	    <div class="form-group col-md-6">
       			  	  	<label for="">Patient Email</label>
       			  	  	<input type="email" name="email" id="" class="form-control" placeholder="Enter Patient Email">
       			  	  </div>
       			  	   <div class="form-group col-md-6">
       			  	  	<label for="">Contact Number</label>
       			  	  	<input type="text" name="contact" id="" class="form-control" placeholder="Enter Mobile Number">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Mother Name</label>
       			  	  	<input type="text" name="mother" id="" class="form-control" placeholder="Mother Name">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Father Name</label>
       			  	  	<input type="text" name="father" id="" class="form-control" placeholder="Father Name">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Patient Age</label>
       			  	  	<input type="text" name="age" id="" class="form-control" placeholder="Enter Your age">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Problem</label>
       			  	  	<input type="text" name="problem" id="" class="form-control" placeholder="Enter Your Problem">
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Doctor</label>
       			  	  	<select name="doc_name" id="" class="form-control">
       			  	  		<option value="">Select Doctor</option>
       			  	  		<?php 
							 $seldoc = "select * from doctor";
							 $ex = mysqli_query($con,$seldoc);
							 while($rs = mysqli_fetch_array($ex))
							 {
						     ?>
						     
						     	<option value="<?php echo $rs['did']; ?>"><?php echo $rs['name']; ?></option>	 
						    <?php		 
							 }
							?>
       			  	  		
       			  	  		
       			  	  	</select>
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Room No</label>
       			  	  	<select name="room_no" id="" class="form-control">
       			  	  		<option value="">Select Room No</option>
       			  	  		<option value="1">1</option>
       			  	  		<option value="2">2</option>
       			  	  		<option value="3">3</option>
       			  	  		<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
     			  	  	    <option value="8">8</option>
     			  	  	    <option value="9">9</option>
     			  	  	    <option value="10">10</option>
     			  	  	    
       			  	  	</select>
       			  	  </div>
       			  	  <div class="form-group col-md-6">
       			  	  	<label for="">Dob</label>
       			  	  	<input type="date" name="dob" id="" class="form-control">
       			  	  </div>
       			  	  
       			  	  <div class="form-group col-md-12 text-center">
       			  	    <input type="submit" class="btn btn-default" />
       			  	  </div>
       			  	
       			  </form>
       				
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
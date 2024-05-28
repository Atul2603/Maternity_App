<?php include('header.php'); ?>
      <!-- End of Header -->
       
       	<?php include('sidebar.php'); ?>
       	<div class="col-md-10" id="righ_section">
       		<div class="panel">
       			
       			<div class="panel-heading">
       				<h3>Patient Reciept</h3>
       			</div>
       			<?php 
				  
				   $data = array('name'=>@$_POST['name'],
								'email'=>@$_POST['email'],
								'contact'=>@$_POST['contact'],
								'mother'=>@$_POST['mother'],
								'father'=>@$_POST['father'],
								'age'=>@$_POST['age'],
								'problem'=>@$_POST['problem'],
								'did'=>@$_POST['doc_name'],
								'room_no'=>@$_POST['room_no'],
								'tokenid'=>"OPD".mt_rand(),
								'dob'=>@$_POST['dob'],
								'password'=>@$_POST['contact'],
								'reg_date'=>date("Y-m-d H:i:s"));
				
				 $key = implode(",",array_keys($data));
				 $value = implode("','",array_values($data));
				
				 $qry ="insert into new_profile($key) values('$value')";
				
				 if(mysqli_query($con,$qry))
				 {
					 echo "<script> alert('Registration Successful'); </script>";
				 }
				
				?>
       			<div class="panel-body">
       				<table class="table">
       					<tr>
       						<td>Registration Date: <?php echo date('d/m/y'); ?> / OPD NO: <?php echo $data['tokenid']; ?></td>
       						<td>Hospital Contact: 2989382389</td>
       					</tr>
       					<tr>
       						<td>Patient Name</td>
       						<td><?php echo @$_POST['name']; ?></td>
       					</tr>
       					<tr>
       						<td>Age</td>
       						<td><?php echo @$_POST['age']; ?></td>
       					</tr>
       					<tr>
       						<td>Doctor</td>
       						<td><?php echo @$_POST['doc_name']; ?></td>
       					</tr>
       					<tr>
       						<td>Room No</td>
       						<td><?php echo @$_POST['room_no']; ?></td>
       					</tr>
       				</table>
       				<div class="col-md-12 text-center">
       					<button class="btn btn-default" onclick="window.print();">Print</button>
       				</div>
       			</div>
       			
       			
       		</div>
       		
       		
       		
       		
       	</div>
<?php include('footer.php'); ?>
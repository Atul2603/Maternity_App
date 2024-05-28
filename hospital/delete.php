<?php 
 include('../config.php');

 if(isset($_GET['tokenid']))
 {
 $id = $_GET['tokenid'];

 $qry1 ="delete from new_profile where tokenid='$id'";
 $qry2 ="delete from basic_checkup where tokenid='$id'";
 $qry3 ="delete from fill where tokenid='$id'";
 $qry4 ="delete from month_fill where tokenid='$id'";

 mysqli_query($con,$qry1);
 mysqli_query($con,$qry2);
 mysqli_query($con,$qry3);
 
 $ex = mysqli_query($con,$qry4);
 
 if($ex>0)
 {
 	echo "<script> alert('Delete Record Successful'); window.location.href='all_reg.php'; </script>";
 }
 }

 if(isset($_GET['doc_del']))
 {
 	$id = $_GET['doc_del'];
 	 $qry ="delete from doctor where did='$id'";
 	 $e = mysqli_query($con,$qry);
 
 if($e>0)
 {
 	echo "<script> alert('Delete Record Successful'); window.location.href='all_doctor.php'; </script>";
 }

 }
?>
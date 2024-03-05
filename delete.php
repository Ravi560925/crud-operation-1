<?php
 include "connect.php";
 if(isset($_GET['deleteid']))
   {
	   $con=mysqli_connect("localhost","root","","ravi");
     $id=$_GET['deleteid'];
	 $sql="delete from `crud` where `id`='$id'";
	 $result=mysqli_query($con,$sql);
	 if($result)
	   {
	     header('location:button.php');
		}
		else
		 {
		  die(mysqli_error($con));
		 }
	}
?>
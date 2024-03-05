<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="container">
		<form action="connect.php" method="POST">
		  <input type="text" name="txtfnm" placeholder="enter your first name" class="container mt-5"  required>
		  <input type="text" name="txtlnm" placeholder="enter  your last name" class="container mt-5"  required>
		  <input type="text" name="txtmno" placeholder="enter mobile number" class="container mt-5"  required>
		  <input type="text" name="txtema" placeholder="enter email" class="container mt-5"  required>
		  <input type="password" name="txtpwd" placeholder="enter password" class="container mt-5"  required>
		  <input type="submit" value="login" class="btn btn-primary mt-5 w-100">
		 </form>
	</div>
	  <button type="submit" class="btn btn-primary">update</button>
	     
<?php
 $con=mysqli_connect("localhost","root","","ravi");
 $id=$_GET['updateid'];
     if(isset($_POST['txtfnm']))
	 {
		 $fnm=$_POST['txtfnm'];
		 $lnm=$_POST['txtlnm'];
		 $mno=$_POST['txtmno'];
		 $ema=$_POST['txtema'];
		 $pwd=$_POST['txtpwd'];
		 $sql="update `crud` set `id`='$id',`firstname`='$fnm',`lastname`='$lnm',`mobileno`='$mno',`email`='$ema',`password`='$pwd'";
		 $result=mysqli_query($con,$sql);
		 if($result !=1)
		 {
			 echo "invalid";
		 }
	 }
?>
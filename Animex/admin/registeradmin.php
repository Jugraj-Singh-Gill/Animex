<?php 
include 'header.php';
include 'ft.php';
include 'db.php';
 ?>

 <!-- registertaion form -->
<div class="container">
	<div class="head" style="text-align: center;">
		<h1>Register admin for Animex</h1>
	</div>
	<form action="registeradmin.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
 <!-- reg end -->

 <?php 
if (isset($_POST['submit'])) {

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	$query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$pwd')";
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>alert('Admin Successfully Added.. :)');window.location.href='adminlist.php';</script>";

	}
	else{
		echo "something wrong";
	}
}


  ?>
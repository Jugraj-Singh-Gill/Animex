<?php 
session_start();

include 'ft.php';
include 'db.php';
 ?>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div class="container">
	<div class="head" style="text-align: center;">
		<h1>Login To Animex</h1>
	</div>
	<form action="login.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="uname" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="pwd" class="form-control" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php 

if (isset($_POST['submit'])) 
{
	$user = $_POST['uname'];
	$pwd = $_POST['pwd'];

	$query = "Select * From admin where uname = '$user' and pwd= '$pwd' ";
	$run = mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if ($row==1) 
	{
		$_SESSION['loginsuccesfull']=1;
				$_SESSION['user'] = $user;
				echo "<script>alert('Logged in Successfully'); window.location.href='index.php';</script>";
	}
	else{
				echo "<script>alert('Check your ID pass - They Not Mactched our Users'); </script>";
			}
	
}

 ?>

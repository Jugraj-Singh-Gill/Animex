<?php 

include 'db.php';
include 'header.php';
include 'ft.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM `anime` WHERE id=$id";
	$run = mysqli_query($con,$query);
	if ($run) {
		header('location:animelist.php');
	}
	else{
		echo "<script>alert('Something went Wrong!!');window.location.href='animelist.php';</script>";
	}
}
else{
	header('location:animelist.php');
}

 ?>
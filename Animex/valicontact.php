<?php 

include 'header.php';
include 'ft.php';
include 'db.php';

if (isset($_POST['csub'])) 
{
	$name = $_POST['username'];
	$mail = $_POST['email'];
	$msg = $_POST['msg'];

	$query = "INSERT INTO `contactus`(`uname`, `email`, `message`) VALUES ('$name','$mail','$msg')";
	$run = mysqli_query($con,$query);
	if ($run) 
	{
		echo "<script>alert('Message Sent Successfully');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Something Went Wrong!!..');window.location.href='index.php';</script>";	
	}
}
else
{
	header('location:index.php');
}

 ?>
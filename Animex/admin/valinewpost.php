<?php 
include 'header.php';
include 'db.php';

if (isset($_POST['submit'])) {
	$an_name = $_POST['an_name'];
	$an_m_desc = $_POST['an_m_desc'];
	$an_link1 = $_POST['an_link1'];
	$an_link2 = $_POST['an_link2'];
	$an_lang = $_POST['an_lang'];
	$cat_id = $_POST['cat_id'];
	$genre_id = $_POST['genre_id'];
	$an_desc = $_POST['an_desc'];
	$an_episode = $_POST['an_episodes'];
	$an_date = date('Y-m-d', strtotime($_POST['an_date']));
	$target = "../thumb/".basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];

	$query = "INSERT INTO `anime`(`category_id`, `genre_id`, `anime_name`, `anime_des`, `anime_ep`, `link1`, `link2`, `img`, `date`, `lang`, `meta_des`) VALUES ($cat_id,$genre_id,'$an_name','$an_desc',$an_episode,'$an_link1','$an_link2','$img','$an_date','$an_lang','$an_m_desc')";

	$run=mysqli_query($con,$query);
	if(move_uploaded_file($_FILES['img']['tmp_name'],$target)) 
	{
		echo "<script>alert('Anime Successfully Added..');window.location.href='animelist.php';</script>";
		
	}
	else
	{
		echo "<script>alert('Something Went Wrong!!');window.location.href='addanime.php';</script>";
		
	}

}

 ?>
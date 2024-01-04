<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>
<?php 

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
$query = "SELECT * FROM anime Where id=$id";
$run = mysqli_query($con,$query);
if ($run) {
  while ($row=mysqli_fetch_assoc($run)) {
    ?>
<div class="container">
	<div class="jumbotron">
		<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="an_name" value="<?php echo$row['anime_name'] ?>" class="form-control" placeholder="Enter Anime Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="an_m_desc" value="<?php echo$row['meta_des'] ?>" class="form-control" placeholder="Enter meta description" >
  </div>
    <div class="form-group">
   
  <div class="form-group">
   
    <input type="text" name="an_link1" value="<?php echo$row['link1'] ?>" class="form-control" placeholder="Enter Link 1" >
  </div>
  <div class="form-group">
   
    <input type="text" name="an_link2" value="<?php echo$row['link2'] ?>" class="form-control" placeholder="Enter Link 2" >
  </div>
  <div class="form-group">
   
    <input type="date" name="an_date" value="<?php echo$row['date'] ?>" class="form-control" placeholder="Enter Date">
  </div>
  <div class="form-group">
   
    <input type="text" name="an_episode"s value="<?php echo$row['anime_ep'] ?>" class="form-control" placeholder="Enter Anime Episodes" >
  </div>
  <div class="form-group">
   
    <input type="text" name="an_lang" value="<?php echo$row['lang'] ?>" class="form-control" placeholder="Enter Anime Language" >
  </div>
  <div class="form-group">
   
    <input type="text" name="cat_id" class="form-control" value="<?php echo$row['category_id'] ?>" placeholder="Enter Category ID" >
  </div>
  <div class="form-group">
   
    <input type="text" name="genre_id" class="form-control" value="<?php echo$row['genre_id'] ?>" placeholder="Enter Genre ID" >
  </div>
   <div class="custom-file">
    <input type="file" name="img" class="custom-file-input" id="customFile">
    <img src="<?php echo"../thumb/".$row['img'] ?>" height="100px">
    <label class="custom-file-label" for="customFile">Choose file</label>
    <input type="file" name="old_img" class="custom-file-input" id="customFile" value="<?php echo$row['img'] ?>">

  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
   <input type="text"value="<?php echo$row['anime_des'] ?>" name="an_desc" class="form-control" placeholder="Enter Anime description" rows="4" height="100px">
    
  </div>


  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>
  
  <?php 
if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $an_name = $_POST['an_name'];
  $an_m_desc = $_POST['an_m_desc'];
  $an_link1 = $_POST['an_link1'];
  $an_link2 = $_POST['an_link2'];
  $an_lang = $_POST['an_lang'];
  $cat_id = $_POST['cat_id'];
  $genre_id = $_POST['genre_id'];
  $an_desc = $_POST['an_desc'];
  $an_episodes = $_POST['an_episodes'];
  $an_date = date('Y-m-d', strtotime($_POST['an_date']));
  $target = "../thumb/".basename($_FILES['img']['name']);
  $newimg = $_FILES['img']['name'];
  $old_img = $_POST['old_img'];

  if ($newimg != '') 
  {
    $update_filename = $newimg;
  }
  else
  {
    $update_filename=$old_img;
  }

 
     
  if (file_exists("../thumb/".$newimg)) 
  {
    $filname = $newimg;
   
    echo "<script>alert('Image Already Added..');window.location.href='editanime.php';</script>"; 
  }
  

  else
  {
    $query1 = " UPDATE `anime` SET `cat_id`=$cat_id,`genre_id`=$genre_id,`anime_name`='$an_name',`aninme_des`='$an_desc',`link1`='$an_link1',`link2`='$an_link2',`img`='$update_filename',`date`='$an_date',`anime_ep`=$an_episodes,`lang`='$an_lang',`meta_description`='$an_m_desc' WHERE id = $id ";
    $qr = mysqli_query($con,$query1);
    if ($qr)
     {
        if ($_FILES['img']['name'] !='') 
        {
          if (move_uploaded_file($_FILES['img']['tmp_name'], "../thumb/".$_FILES['img']['name'])) 
          {
            echo "<script>alert('Anime Succesfully Updated');window.location.href='animelist.php';</script>";

           }
          else
          {
           echo "<script>alert('Something Went Wrong!!..');window.location.href='addanime.php';</script>";
           }
        }
      }

  }
}
   ?>


<?php
  }
}

}
else{
  header('location:animelist.php');
}

 ?>
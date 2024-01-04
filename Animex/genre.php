<?php 
include 'header.php';
include 'ft.php';
include 'db.php';
 ?>
 <div class="content">
    <div class="row">
 <?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];
		
		$query = "SELECT * from anime,genre where genre.id=anime.genre_id and genre.id=$id";
		$run = mysqli_query($con,$query);
		if (mysqli_num_rows($run)>0) 
		{
			while ($row=mysqli_fetch_assoc($run)) 
			{
				?>

<div class="col">
    <div class="card" style="width: 18rem;text-align: center;">
  <img class="card-img-top" height="300px" width="100px" src="thumb/<?php echo$row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo$row['anime_name']; ?></h5>
    <p class="card-text"><?php echo$row['anime_ep']."<br>".$row['date']; ?></p>
    <?php 

    $id = $row['id'];
    
     ?>
    <a href="<?php echo $row['link1'] ?>" class="btn btn" style="background-color:#726297; color: #fff;">Download</a>
  </div>
</div>
</div>
				<?php
			}
		}
		else{
			echo "<h1>No Movie Found</h1>";
		}
	}



  ?>
</div>
</div>
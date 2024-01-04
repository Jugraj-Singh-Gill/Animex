<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Animes On Animex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <ul class="navbar-nav ml-auto">
  	 	      <li class="nav-item">
        <a class="btn btn-warning text-light" href="addanime.php">Add an Anime</a>
      </li>
  	 </ul>
  </div>
</nav>
</div>

		
	
		
<div class="container">
  

<div class="row">
<?php 

$query = "SELECT * FROM anime";
$run = mysqli_query($con,$query);

if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {
		?>
  <div class="col-md-2">

    <div class="card" style="width:200px;text-align: center;">
    	<p><?php echo $row['id']; ?></p>
     <?php echo "<img height='180px' width='auto' src='../thumb/".$row['img']."'>"; ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['anime_name']; ?></h5>
        <p class="card-text"><?php echo $row['meta_des']; ?></p>
        <a href="viewanime.php?id=<?php echo$row['id']; ?>" class="btn btn-secondary">View Details</a>
      <br>
      <br>
      <a href="deleteanime.php?id=<?php echo$row['id'] ?>" class="btn btn-danger">DELETE</a>
      <a href="editanime.php?id=<?php echo$row['id'] ?>" class="btn btn-info ">Edit</a>
</div>

    </div>
  </div><?php		
	}}

 ?>
</div>
	</div>
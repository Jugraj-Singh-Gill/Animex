<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>
<div class="content">
<div class="row">
	<!-- movie -->
  <div class="col-sm-6">
    <div class="card bg-info" style="border: 1px solid #ccc;">
      <div class="card-body text-center">
        <h5 class="card-title">Total No. Of Post</h5>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_anime from anime";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) 
    {
			echo $row['total_anime'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>
  <!-- ---category -->
  <div class="col-sm-6">
    <div class="card bg-success" style="border: 1px solid #ccc;">
      <div class="card-body text-center">
        <h5 class="card-title">Total No. Of Category</h5>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_category from category";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_category'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>

  <!-- admin -->
  <div class="col-sm-6">
    <div class="card bg-secondary" style="border: 1px solid #ccc;">
      <div class="card-body text-center">
        <h5 class="card-title">Total No. Of Admin</h5>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_admin from admin";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_admin'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>
  <!-- ---genre -->
  <div class="col-sm-6">
    <div class="card" style="border: 1px solid #ccc; background-color: #99ad5a;">
      <div class="card-body text-center">
        <h5 class="card-title">Total No. Of Genre</h5>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_genre from genre";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_genre'];
		}
	}
	 ?></p>
        
      </div>
     </div>
    </div>
  </div>
</div>
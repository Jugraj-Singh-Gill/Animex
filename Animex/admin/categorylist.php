<?php 

include 'header.php';
include 'ft.php';
include 'db.php';
 ?>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Category On Animex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="addcategory.php">Add a Category</a>
      </li>
     </ul>
    <ul class="navbar-nav ml-auto">
  </div>
</nav>
</div>

	
  <div class="container">
    
  <hr>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category ID </th>
      <th scope="col">Category Name</th>
      <th scope="col">Genre ID</th>
      <th scope="col">No. of Post</th>
      <th scope="col">CURD</th>
      <th scope="col">View Post</th>


    </tr>
  </thead>
  <?php 

$query = "SELECT * FROM category";
$run = mysqli_query($con,$query);
if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {

?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['category_id']; ?></td>
      <td><?php echo $row['category_name']; ?>
      <td><?php echo $row['genre_id']; ?>  
      </td>
      <?php 
      $id = $row['id'];
      $query1 = "SELECT count(*) as total from anime,category where category.id=anime.category_id and category.id=$id ";
      $run1 = mysqli_query($con,$query1);
      if ($run1) {
       while ($row1 = mysqli_fetch_assoc($run1)) {
               
                  ?>
                   <td><?php echo $row1['total']; ?></td>
                  <?php
                }
      }
       ?>
     

      <td>
      	<a href="deletecategory.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
       <a class="btn btn-outline-secondary" href="editcategory.php?id=<?php echo $row['id']; ?>&forkey=<?php echo$row['category_id']; ?>&catname=<?php echo$row['category_name']; ?>">Edit</a></td>
       <td><a href="viewpost.php?id=<?php echo$row['id'] ?>" class="btn btn-outline-info">View Posts</a></td>

    </tr>

  </tbody>
  <?php
	}
}

   ?>
</table>
</div>

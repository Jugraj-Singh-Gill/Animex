<?php 

include 'header.php';
include 'ft.php';
include'db.php';
 ?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Requests On Animex</a>
</nav>
</div>

 <div class="container" style="text-align: center;">
 	<center><h1>Contact List</h1></center>
 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Message</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "select * from contactus";
  	$run = mysqli_query($con,$query);
  	if ($run) 
    {
  		while ($row=mysqli_fetch_assoc($run)) 
      {
  			?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['uname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a class="btn btn-danger" href="deletecon.php?id=<?php echo$row['id'] ?>">Delete</a></td>
    </tr>
   	<?php
  		}
  	}
  	 ?>
  </tbody>
</table>
 </div>
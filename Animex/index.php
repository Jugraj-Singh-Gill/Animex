<?php 

include 'header.php';
include 'ft.php';
include 'db.php';
 ?>
  <meta charset="UTF-8">
<div class="content">
    <div class="row">
        
    
    <?php 

    $query = "SELECT * FROM anime";
    $run = mysqli_query($con,$query);
    if ($run) {

        while($row = mysqli_fetch_assoc($run))
        {
            ?>

<div class="col">
    <div class="card" style="width: 17rem;text-align: center;">
  <img class="card-img-top" height="300px" width="120px" src="thumb/<?php echo$row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo$row['anime_name']; ?></h5>
    <p class="card-text"><?php echo$row['anime_ep']."<br>".$row['date']; ?></p>
    <?php 

    $id = $row['id'];
     ?>
    <a href="detail.php?id=<?php echo$row['id']; ?>" class="btn btn" style="background-color:#726297; color: #fff;">View Detail</a>
  </div>
</div>
</div>

            <?php

        }

    }

     ?>
</div>
</div>


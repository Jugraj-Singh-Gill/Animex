
<?php 
include 'header.php';
include 'ft.php';
include 'db.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];


$query = "SELECT * FROM anime where id=$id";
$run = mysqli_query($con,$query);
if ($run) {
	while ($row=mysqli_fetch_assoc($run)) {
		?>

		<div class="container">
			<div class="row">
				<div class="col">
					<div>
     					<?php echo "<img height='400px' width='auto' src='thumb/".$row['img']."'>"; ?>
						
					</div>

				</div>

				<div class="col" >
				
				<h1 style="text-align: center;"><?php echo $row['anime_name']; ?></h1>
					<p><?php echo $row['anime_des']; ?></p>
					<div class="date" style="background-color: #bbb;text-align: center;">
						<pre><?php echo $row['anime_ep']; ?></pre>
						<pre><?php echo $row['date']; ?></pre>
						<pre><?php echo $row['lang']; ?></pre>
					</div>
				</div>
				
			</div>
			<br><br><br>
			<div>
				<div>
					<a class="btn btn-info" href="<?php echo$row['link1'] ?>">Watch on Aniwave</a>
					<a class="btn btn-success" href="<?php echo$row['link2'] ?>">Watch on ZoroTo</a>
				</div>
				<br>
				<br>
					<div class="jumbotron">
						<p><?php echo $row['meta_des']; ?></p>
					</div>
				</div>
		</div>

		<?php
	}
}

}


 ?>
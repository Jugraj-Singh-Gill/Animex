<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<div class="jumbotron">
		<form action="valinewpost.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="an_name" class="form-control" placeholder="Enter Anime Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="an_m_desc" class="form-control" placeholder="Enter meta description" >
  </div>
  <div class="form-group">
   
    <input type="url" name="an_link1" class="form-control" placeholder="Enter Link 1" >
  </div>
  <div class="form-group">
   
    <input type="url" name="an_link2" class="form-control" placeholder="Enter Link 2" >
  </div>
  <div class="form-group">
   
    <input type="date" name="an_date" class="form-control" placeholder="Enter Date">
  </div>
  <div class="form-group">
   
    <input type="text" name="an_lang" class="form-control" placeholder="Enter Anime Language" >
  </div>
  <div class="form-group">
   
    <input type="text" name="an_episodes" class="form-control" placeholder="Enter Anime Episodes" >
  </div>
  <div class="form-group">
   
    <input type="text" name="cat_id" class="form-control" placeholder="Enter Category ID" >
  </div>
  <div class="form-group">
   
    <input type="text" name="genre_id" class="form-control" placeholder="Enter Genre ID" >
  </div>
   <div class="custom-file">
    <input type="file" name="img" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
   <textarea type="text" name="an_desc" class="form-control" placeholder="Enter Anime description" rows="4"></textarea>
    
  </div>


  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>
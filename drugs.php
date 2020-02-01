<?php include_once "includes/header.php" ?>
<?php
// session_start();
	  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: home.php");
  }
 ?>
<hr>
<div class="container">
  <h3 class="sm">Add A Drug</h3>
  <form enctype="multipart/form-data" method="post" action="backend/drug.php">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Title</label>
        <input type="text" name="name" class="form-control" id="inputEmail4">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Address</label>
        <input type="text" name="address" class="form-control" id="inputPassword4">
      </div>
    </div>
    <div class="mb-3">
      <label for="validationTextarea">Textarea</label>
      <textarea class="form-control" name="desc" id="validationTextarea" placeholder="Enter Drug Description" required></textarea>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="image"  id="customFile">
      <label class="custom-file-label" for="customFile">Upload Picture</label>
    </div>
    <hr>
    <button type="submit" class="btn btn-primary">Register Drug</button>
  </form>
</div>

<?php include_once "includes/header.php";
      include_once "backend/config.php";
      $cur = new AppInit();
      $drugs = $cur->getDrugs();
?>

<div class="container">
  <hr>
  <h3>Drugs</h3>
  <?php if (!empty($drugs)): ?>
    <?php foreach ($drugs as $drug): ?>
      <?php
        $image = base64_encode($drug['image']);
        // echo $image;
       ?>
      <div class="card mb-3" style="max-width: 45%;">
         <div class="row no-gutters">
          <div class="col-md-4">
            <img style="width: 100%; height: 100%" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $drug['title'] ?></h5>
              <p class="card-text"><?php echo $drug['description'] ?></p>
              <p class="card-text"><small class="text-muted"><?php echo $drug['address'] ?></small></p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

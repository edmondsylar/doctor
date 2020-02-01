<?php include_once "includes/header.php";
      include_once "backend/config.php";
      $cur = new AppInit();
      $services = $cur->getServices();
?>
<div class="container">
  <hr>
  <h3>Services</h3>
  <?php if (!empty($services)): ?>
    <?php foreach ($services as $service): ?>
      <?php
        $img = base64_encode($service['image']);
        // echo $img;
       ?>
      <div class="card mb-3" style="max-width: 45%;">
         <div class="row no-gutters">
          <div class="col-md-4">
            <img src=src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="card-img" alt="Service image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $service['title'] ?></h5>
              <p class="card-text"><?php echo $service['description'] ?></p>
              <p class="card-text"><small class="text-muted"><?php echo $service['address'] ?></small></p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

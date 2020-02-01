<?php include_once "includes/head.php" ?>
<div class="container">
  <h1>Doctor's Login System
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
      we can place a simple image here
    </div>
    <div class="col-sm">
      <h3 class="center">Login</h3>
      <form action="backend/login.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      Don't have an account yet? <a href="register.php">register </a>
    </div>
  </div>
</div>
<?php include_once "includes/footer.php" ?>

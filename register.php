<?php include_once "includes/head.php" ?>
  <div class="container">
      <h1>Doctor's Login System</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        we can place a simple image here
      </div>
      <div class="col-sm">
        <h3 class="center">Register</h3>
        <form action="backend/register.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" name="names" class="form-control">
          </div>

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

        Already have an account? <a href="index.php">Login </a>
      </div>
    </div>
  </div>
<?php include_once "includes/footer.php" ?>

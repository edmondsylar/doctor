<?php include_once "head.php";  session_start();?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Doctors Clinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./home.php">Drugs <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./serv.php">Services</a>
      </li>
<!-- these are only admin options -->
      <?php if (isset($_SESSION['loggedin'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="./drugs.php">Add Drug</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./services.php">Add Services</a>
        </li>
      <?php endif; ?>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Drug" aria-label="Logout">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button> &nbsp;&nbsp;
      <?php if (!isset($_SESSION['loggedin'])): ?>
      <a href="login.php" class="btn btn-outline-success my-2 my-sm-0">
          Login
      </a>
    <?php endif; ?>
      &nbsp;&nbsp;
      <?php if (isset($_SESSION['loggedin'])): ?>
      <a href="backend/logout.php" class="btn btn-outline-success my-2 my-sm-0">
          Logout
      </a>
    <?php endif; ?>
    </form>
  </div>
</nav>

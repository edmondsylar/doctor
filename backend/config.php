<?php
  /**
   * This is the main class for all our connectinos
   */
  class AppInit
  {
    public $conn;

    function __construct()
    {
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'root');
      define('DB_PASSWORD', '');
      define('DB_NAME', 'doctor');

      $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      if($this->conn === false){
        echo "App not loving your database setup";
      }
    }

    function Login($email, $password){
      $passcheck = md5($password);
      $login_query = "SELECT * FROM users WHERE email='$email' AND password='$passcheck'";

      // make the database query
      $Auth = mysqli_query($this->conn, $login_query);
      $bj = mysqli_fetch_assoc($Auth);
      if($bj['id']){
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $bj['email'];
        $_SESSION["name"] = $bj['names'];

        header("Location: ../services.php");
      }else{
        header("Location: ../login.php");
        // echo mysqli
      }

    }

    function register($email, $name, $password){
      $pass = md5($password);

      $ins = "INSERT INTO users(`email`, `password`, `names`) VALUES ('$email', '$pass', '$name')";
      if(mysqli_query($this->conn, $ins)){

        header("Location: ../login.php");
      }else{
        echo "Something is wrong <br> ".mysqli_error($this->conn);
      }
    }

    function add_drug($title, $desc, $add, $image){
      $add = "INSERT INTO drugs(`title`, `description`, `image`, `address`) VALUES ('$title', '$desc', '$image', '$add')";

      if(mysqli_query($this->conn, $add)){

        header("Location: ../drugs.php");
      }else{
        echo "somthing went wrong". mysqli_error($this->conn);
      }

    }

    function add_service($title, $desc, $address, $image){
      $add = "INSERT INTO services(`title`, `description`, `image`, `address`) VALUES ('$title', '$desc', '$image', '$address')";

      if(mysqli_query($this->conn, $add)){

        header("Location: ../services.php");
      }else{
        echo "somthing went wrong". mysqli_error($this->conn);
      }

    }

    function getDrugs(){
      $ms = "SELECT * FROM drugs";
      $results = mysqli_query($this->conn, $ms);

      return $results;
    }

    function getServices(){
      $ms = "SELECT * FROM services";
      $results = mysqli_query($this->conn, $ms);

      return $results;
    }

    function search($keyword){
      $q = "(SELECT *, 'drugs' as drug from drugs WHERE title LIKE '%$keyword' OR description LIKE '%$keyword') UNION (SELECT *, 'drugs' as Service from drugs WHERE title LIKE '%$keyword' OR description LIKE '%$keyword')";

      $exec = mysqli_query($this->conn, $q);
      $results = mysqli_fetch_assoc($exec);
      echo "String ".gettype($results);

      $_SESSION['results'] = $results;
      header("Location: ../results.php");
    }

  }


 ?>

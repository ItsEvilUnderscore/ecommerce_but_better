<?php
    session_start();
    require './includes/dbh.inc.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>Just Below Zero | Winter Apparel</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
          <a href="index.php" class="navbar-brand">Just Below Zero</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="post.php" class="nav-link">Post</a>
              </li>
              <li class="nav-item">
                <a href="calculator.php" class="nav-link">Calculator</a>
              </li>
              <li class="nav-item">
                <a href="calender.php" class="nav-link">Calender</a>
              </li>
              <li class="nav-item">
                <a href="array.php" class="nav-link">Arrays</a>
              </li>
              <li class="nav-item">
                <a href="variables.php" class="nav-link">Variables</a>
              </li>
              <?php
                if (isset($_SESSION['userId'])) {
                  echo '
                  <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a>
                  </li>
                  ';
                } else {
                  echo '
                  <li class="nav-item">
                    <a href="signup.php" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a>
                  </li>
                  ';
                }
              ?>
              <?php
                if (isset($_SESSION['userId'])) {
                  echo '
                  <li class="nav-item">
                  <a href="index.php" class="nav-link">'.$_SESSION['userId'].'</a>
                  </li>
                  ';
                } else {
                  echo '
                  <li class="nav-item">
                  <a href="login.php" class="nav-link">Login</a>
                  </li>
                  ';
                }
              ?>
              <?php
                if (isset($_SESSION['userId'])) {
                  echo '<li class="nav-item">
                      <a href="./includes/logout.inc.php" class="nav-link" name="logout-submit">Logout</a>
                    </li>
                    ';
                } else {
                  echo '
                  <li class="nav-item">
                      <a href="signup.php" class="nav-link">Sign Up</a>
                    </li>
                  ';
                }
              ?>
            </ul>
          </div>
        </div>
    </nav>
    

    <!-- nav and head info -->
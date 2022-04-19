<?php
    session_start();
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
    <title>Just Below Zero | Sign Up</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
<body class="bg-black">
<main>
  
<div class="container">
    <div class="text-center h-color">
      <br><br>
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                <section>
                <h1>Sign Up</h1><br>
                    <form action="includes/signup.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username"><br><br>
                        <input type="text" name="mail" placeholder="E-Mail"><br><br>
                        <input type="password" name="pwd" placeholder="Password"><br><br>
                        <input type="password" name="pwd-repeat" placeholder="Retype Password"><br><br>
                <?php
                  if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                      echo '<h5 class="error nav-link"><i>Please fill in all fields</i></h5>';
                    }
                    elseif ($_GET['error'] == "invalidmail") {
                        echo '<h5 class="error nav-link"><i>Please use a valid e-mail address</i></h5>';
                    }
                    elseif ($_GET['error'] == "invaliduid") {
                        echo '<h5 class="error nav-link"><i>Please use a valid username (use "_")</i></h5>';
                    }
                    elseif ($_GET['error'] == "passwordcheck") {
                        echo '<h5 class="error nav-link"><i>Password needs to be the same in both fields</i></h5>';
                    }
                    elseif ($_GET['error'] == "sqlerror") {
                        echo '<h5 class="error nav-link"><i>An error has occured. Please try again later.</i></h5>';
                    }
                    elseif ($_GET['error'] == "usertaken") {
                        echo '<h5 class="error nav-link"><i>That username is already taken</i></h5>';
                    }
                  }
                  else {
                    echo "";
                  }
                  
                ?>
                        <button type="submit" name="signup-submit" class="btn-color-inv btn-lg">Sign Up</button>
                    </form>
                </section>
              </div>
          </div>


          <?php

include "footer.php";
?>
</body>
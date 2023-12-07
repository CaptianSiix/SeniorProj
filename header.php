<?php
//Gets DB started
  session_start();
//Gets functions needed to progress
  include_once 'includes/functions.inc.php';
?>
    <!--CSS and other things. Need this page on every single page in order for them to work-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zrukbat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=3.4.2" />
</head>
<body>




    <!--Nav bar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="images/zrukbat.png" alt="logo" style="width:60px;">
  </a>
    <li class="nav-item">
      <a class="nav-link" href="index.php">New</a>
    </li>
    <li class="nav-item">
      <a class='nav-link' href="https://paizo.com/">Paizo's Website</a>
    </li>
          <!--If the user is logged in it shows this -->
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
            }
              // if user is not logged in it shows this
            else {
              echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign up</a></li>";
              echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log in</a></li>";
            }
          ?>
                <!--CHECKS TO SEE IF THE USER CAN POST-->
                <?php if(isset($_SESSION['is_admin']) && !!$_SESSION['is_admin']):?>
                <li class='nav-item'><a class='nav-link' href='posts.php'>Post</a></li>
                <?php else:?>
                <?php endif;?>
        </ul>
      </div>
    </nav>

    <div class="row">
    <div class="col"></div>
    <h3>1 </h3>
    <div class="col"></div>
  </div>
  <div class="row">
    <div class="col"></div>
    <h3> 1</h3>
    <div class="col"></div>
  </div>

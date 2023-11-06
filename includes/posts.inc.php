<?php

if (isset($_POST["post"])) {

  // First we get the form data from the URL
  $title = $_POST["title"];
  $body = $_POST["body"];

  // Then we run a bunch of error handlers to catch any user mistakes 
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';
  // Left inputs empty
  if (emptyInputLogin($title, $body) === true) {
    header("location: ../posts.php?error=emptyinput");
		exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  createPost($conn, $title, $body);

} else {
	header("location: ../signup.php");
    exit();
}
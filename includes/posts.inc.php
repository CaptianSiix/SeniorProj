<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $title = $_POST["title"];
  $body = $_POST["body"];

  // Then we run a bunch of error handlers to catch any user mistakes 

  // Left inputs empty
  if (emptyInputLogin($title, $body) === true) {
    header("location: ../posts.php?error=emptyinput");
		exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  postPost($conn, $title, $body);

} else {
	header("#");
    exit();
}

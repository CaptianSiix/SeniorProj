
<?php
session_start();
var_dump($_SESSION);
  if (isset($_POST["post"])) {
    //var_dump($_SESSION);
    // First we get the form data from the URL
    $title = $_POST["title"];
    $body = $_POST["body"];
    $userid = $_SESSION['userid'];


    // Then we run a bunch of error handlers to catch any user mistakes 
    require_once "dbh.inc.php";
    require_once 'functions.inc.php';


    // If we get to here, it means there are no user errors

    // Now we insert the post into the database
    createPost($conn, $title, $body,$userid);

  } 

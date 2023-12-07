<!--Header-->
<?php
  include_once 'header.php';
?>


<?php
  if (isset($_SESSION["usersadmin"])){
    echo "<p>Correct</p>";
  }
  ?>


<?php

  //Posts coming to fruition
  // This gets data from DB
  require_once "includes\dbh.inc.php";
  //This selects the two tables users and posts and creates a join
  $query = "SELECT*
  FROM posts INNER JOIN users
  ON posts.usersID = users.usersID
  ORDER BY 1 DESC;";
  $result = mysqli_query($conn, $query);
  //This shows every result for the above join 
  if($result) {
      while($row = mysqli_fetch_assoc($result)) {

          echo '<div class="row ">
          <div class="container mt-3 float-left ">
          <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
          <div class="media-body">
            <h4>' . $row["usersUid"] . '<small><i> Posted on ' . $row['postsTime'] . '</i></small></h4>
            <h5>' . $row['postsTitle'] . '</h5>
            <p class="text-break">' . $row['postsBody'] . '</p>';
      }
  }
  ?>

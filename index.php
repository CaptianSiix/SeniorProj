<!--Header-->
<?php
  include_once 'header.php';
?>


<?php
  if (isset($_SESSION["usersadmin"])){
    echo "<p>Correct</p>";
  }
  ?>
  <!--Visualization for posts-->

<?php
  //Posts coming to fruition
  require_once "includes\dbh.inc.php";

  $query = "SELECT `usersID`, `usersName`, `usersEmail`, `usersUid`, `usersAdmin` FROM `users`";
  $result = mysqli_query($conn, $query);

  if($result) {
      while($row = mysqli_fetch_assoc($result)) {

          echo '<div class="row ">
          <div class="container mt-3 float-left ">
          <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
          <div class="media-body">
            <h4>' . $row["usersUid"] . '<small><i> Posted on ' . $row['usersID'] . '</i></small></h4>
            <p>' . $row['usersEmail'] . '</p>';
      }
  }
  ?>

  <div class="row ">
  <div class="container mt-3 float-left ">
  <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Siix <small><i>Posted on February 19, 2016</i></small></h4>
    <p>Dont reply</p>
    <div class="media p-3 img-fluid">
      <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
        <h4>Siix <small><i>Posted on October 4th 2023</i></small></h4>
        <p>Why Not?</p>
      </div>
    </div> 
  </div>
</div>

<div class="container mt-3 float-left">
  <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Siix <small><i>Posted on February 19, 2016</i></small></h4>
    <p>New monster soon</p>
    <div class="media p-3">
      <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
        <h4>Siix <small><i>Posted on October 4th 2023</i></small></h4>
        <p>Cool</p>
      </div>
    </div> 
  </div>
</div>

<div class="container mt-3">
  <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Siix <small><i>Posted on February 19, 2016</i></small></h4>
    <p>Another post</p>
    <div class="media p-3">
      <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
        <h4>Siix <small><i>Posted on October 4th 2023</i></small></h4>
        <p>Cool</p>
      </div>
    </div> 
  </div>
</div>
<div class="container mt-3">
  <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Siix <small><i>Posted on February 19, 2016</i></small></h4>
    <p>Another post</p>
    <div class="media p-3">
      <img src="images/hazmat cat pfp.png" alt="Siix" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
        <h4>Siix <small><i>Posted on October 4th 2023</i></small></h4>
        <p>Cool</p>
      </div>
    </div> 
  </div>
</div>
</div>
</body>
</html>

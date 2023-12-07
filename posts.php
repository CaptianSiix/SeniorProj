<!--Header-->
<?php
  include_once 'header.php';

?>

<!--Checks if the user is an admin-->
<!--Allows admin to post-->
<section class="signup-form">
<?php if(isset($_SESSION['is_admin']) && !!$_SESSION['is_admin']):?>
  <h2>Post</h2>
  <div class="signup-form-form">
  <form action="includes/posts.inc.php" method="post">
      <input type="text" name="title" placeholder="Title....">
      <input type="text" name="body" placeholder="Body...">
      <button type="submit" name="post">Post</button>
    </form>
  </div>

  <!--If you are not an admin it shows this message and you cannot post-->
<?php else:?>
<h1>You do not have permission to post</h1>

<?php endif;?>

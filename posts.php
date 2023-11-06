<?php
  include_once 'header.php';
?>

<section class="signup-form">
<?php if(isset($_SESSION['is_admin']) && !!$_SESSION['is_admin']):?>
  <h2>Post</h2>
  <div class="signup-form-form">
      <input type="text" name="title" placeholder="Title....">
      <input type="text" name="body" placeholder="Body...">
      <button type="submit" name="post">Post</button>
    </form>
  </div>
<?php else:?>
No permission danke schon
<?php endif;?>

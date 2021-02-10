<?php
require_once(VIEW_PATH . "master/inc/header.php");
?>
<div id = "main">
  <div class='wrapper'>
    <form id='login_form' method='post' action="<?php echo APP_URL . '/admin/login'?>">
      <p>Username: </p>
      <input type='text' name='name'>
      <p>Password: </p>
      <input type='text' name='pass'><br><br>
      <input type='submit' name='btn_submit' value='login'>
      <input type='hidden' name='token' value='<?=$token?>'>
    </form>
  </div>
</section>   
<?php
require_once(VIEW_PATH . "master/inc/footer.php");
?>
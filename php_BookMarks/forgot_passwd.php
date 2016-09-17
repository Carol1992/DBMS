<?php
  require_once("bookmark_fns.php");
  do_html_header("Resetting password");

  // creating short variable name
  $username = $_POST['username'];

  try
  {
    $password = reset_password($username);
    dispaly_password($username, $password);
    // echo 'Your new password has been emailed to you.<br />';
  }
  catch (Exception $e)
  {
    echo 'Your password could not be reset - please try again later.';
    echo $e->getMessage();
  }
  do_html_url('index.php', 'Login');
  do_html_footer();
?>

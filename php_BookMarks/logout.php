<?php

// include function files for this application
require_once('bookmark_fns.php'); 
session_start();
$old_user = $_SESSION['valid_user'];  
// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();

// start output html
do_html_header('Logging Out');

if (!empty($old_user))
{
  if ($result_dest)
  {
    // if they were logged in and are now logged out
    display_login_form();
  }
  else
  {
   // they were logged in and could not be logged out
    echo 'Could not log you out.<br />';
  }
}
else
{
  // if they weren't logged in but came to this page somehow
  echo 'You were not logged in, and so have not been logged out.<br />';
  display_login_form();
}

do_html_footer();

?>

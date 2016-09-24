<?php

// include function files for this application
require_once('book_sc_fns.php'); 
session_start();
$old_user = $HTTP_SESSION_VARS['admin_user'];  // store  to test if they *were* logged in
unset($HTTP_SESSION_VARS['admin_user']);
session_destroy();

// start output html
do_html_header('Logging Out');

if (!empty($old_user))
{
  echo 'Logged out.<br />';
  do_html_url('login.php', 'Login');
}
else
{
  // if they weren't logged in but came to this page somehow
  echo 'You were not logged in, and so have not been logged out.<br />';
  do_html_url('login.php', 'Login');
}

do_html_footer();

?>

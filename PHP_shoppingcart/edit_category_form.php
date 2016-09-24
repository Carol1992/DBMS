<?php

// include function files for this application
require_once('book_sc_fns.php'); 
session_start();

do_html_header('Edit category');
if (check_admin_user())
{
  if ($catname = get_category_name($_GET['catid']))
  {
    $catid = $_GET['catid'];
    $cat = compact('catname', 'catid');
    display_category_form($cat);
  }
  else
    echo 'Could not retrieve category details.<br />';
  do_html_url('admin.php', 'Back to administration menu');
}
else
  echo 'You are not authorized to enter the administration area.';

do_html_footer();

?>

<?php

// include function files for this application
require_once('book_sc_fns.php'); 
session_start();

do_html_header('Adding a category');
if (check_admin_user())
{ 
  if (filled_out($_POST)) 
  {
    $catname = $_POST['catname'];
    // try {
    //   insert_category($catname);
    // }
    // catch (Exception $e){
    //   echo $e->getMessage();
    // }
    if(insert_category($catname))
      echo "Category '$catname' was added to the database.<br />";
    else
      echo "Category '$catname' could not be added to the database.<br />";
  } 
  else 
    echo 'You have not filled out the form.  Please try again.';
  do_html_url('admin.php', 'Back to administration menu');
}
else 
  echo 'You are not authorised to view this page.'; 

do_html_footer();

?>

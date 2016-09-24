<?php

// include function files for this application
require_once('book_sc_fns.php'); 
session_start();

do_html_header('Deleting book');
if (check_admin_user())
{
  if (isset($_POST['isbn'])) 
  {
    $isbn = $_POST['isbn'];
    if(delete_book($isbn))
      echo 'Book '.$isbn.' was deleted.<br />';
    else
      echo 'Book '.$isbn.' could not be deleted.<br />';
  } 
  else 
    echo 'We need an ISBN to delete a book.  Please try again.<br />';
  do_html_url('admin.php', 'Back to administration menu');
}
else 
  echo 'You are not authorised to view this page.'; 

do_html_footer();

?>

<?php

// include function files for this application
require_once('book_sc_fns.php'); 
session_start();

do_html_header('Updating book');
if (check_admin_user())
{ 
  if (filled_out($_POST)) 
  {
    $oldisbn = $_POST['oldisbn'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $catid = $_POST['catid'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if(update_book($oldisbn, $isbn, $title, $author, $catid,
                      $price, $description))
      echo 'Book was updated.<br />';
    else
      echo 'Book could not be updated.<br />';

  } 
  else 
    echo 'You have not filled out the form.  Please try again.';
  do_html_url('admin.php', 'Back to administration menu');
}
else 
  echo 'You are not authorised to view this page.'; 

do_html_footer();

?>

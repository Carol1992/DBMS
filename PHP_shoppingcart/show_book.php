<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  $isbn = $_GET['isbn'];

  // get this book out of database
  $book = get_book_details($isbn);
  do_html_header($book['title']);
  display_book_details($book);

  // set url for "continue button"
  $target = 'index.php';
  if($book['catid'])
  {
    $target = 'show_cat.php?catid='.$book['catid'];
  }
  // if logged in as admin, show edit book links
  if( check_admin_user() )
  {
    display_button("edit_book_form.php?isbn=$isbn", 'pencil');
    display_button('admin.php', 'bars');
    display_button($target, 'shopping-cart');
  }
  else
  {
    display_button("show_cart.php?new=$isbn", 'plus'); 
    display_button($target, 'shopping-cart');
  }
  
  do_html_footer();
?>

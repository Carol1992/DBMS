<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  $catid = $_GET['catid'];
  $name = get_category_name($catid);
 
  do_html_header($name);

  // get the book info out from db
  $book_array = get_books($catid);

  display_books($book_array);
 

  // if logged in as admin, show add, delete book links
  if(isset($_SESSION['admin_user']))
  {
    display_button('index.php', 'shopping-cart');
    display_button('admin.php', 'lock');
    display_button("edit_category_form.php?catid=$catid", 
     'pencil');
  }
  else
    display_button('index.php', 'shopping-cart');
  
  do_html_footer();
?>

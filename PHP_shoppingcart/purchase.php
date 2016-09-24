<?php

  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Checkout");
  // create short variable names
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];

  // if filled out
  if($_SESSION['cart']&&$name&&$address&&$city&&$zip&&$country)
  {
    // able to insert into database
    if( insert_order($_POST)!=false )
    {
      //display cart, not allowing changes and without pictures 
      display_cart($_SESSION['cart'], false, 0);

      display_shipping(calculate_shipping_cost());  

      //get credit card details
      display_card_form($name);

      display_button('show_cart.php', 'shopping-cart');  
    }
    else
    {
      echo 'Could not store data, please try again.';
      display_button('checkout.php', 'backward');
    }
  }
  else
  {
    echo 'You did not fill in all the fields, please try again.<hr />';
    display_button('checkout.php', 'backward');
  } 
 
  do_html_footer();
?>

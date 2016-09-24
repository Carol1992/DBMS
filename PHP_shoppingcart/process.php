<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header('Checkout');

  $card_type = $_POST['card_type'];
  $card_number = $_POST['card_number'];
  $card_month = $_POST['card_month'];
  $card_year = $_POST['card_year'];
  $card_name = $_POST['card_name'];

  if($_SESSION['cart']&&$card_type&&$card_number&&
     $card_month&&$card_year&&$card_name )
  {
    //display cart, not allowing changes and without pictures 
    display_cart($_SESSION['cart'], false, 0);

    display_shipping(calculate_shipping_cost());  

    if(process_card($_POST))
    {
      //empty shopping cart
      session_destroy();
      echo 'Thankyou for shopping with us.  Your order has been placed.';
      display_button('index.php', 'shopping-cart');  
    }
    else
    {
    echo 'Could not process your card. ';
    echo 'Please contact the card issuer or try again.';
      display_button('purchase.php', 'backward');
    }
  }
  else
  {
    echo 'You did not fill in all the fields, please try again.<hr />';
    display_button('purchase.php', 'backward');
  } 
 
  do_html_footer();
?>

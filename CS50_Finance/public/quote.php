<?php

    // configuration
    require("../includes/config.php"); 
    
     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "Quote"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide a stock symbol.");
        }
        
         // use the defined function to find out the symbol, name and price of that stock
        $stock = lookup($_POST["symbol"]);
        
        if ($stock === false)
        {
            apologize("Sorry the symbol you enter isn't exit.");
        }
        
        //get the results and render in template
        render("quote_result.php", ["title" => "Quote", "symbol" => $stock["symbol"], "name" => $stock["name"], "price" => $stock["price"]]);
    }
    
?>

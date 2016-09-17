<?php

    // configuration
    require("../includes/config.php"); 
    
     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("buy_form.php", ["title" => "Buy"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide a stock symbol.");
        }
        if (empty($_POST["shares"]))
        {
            apologize("You must provide stock shares.");
        }
        if (!preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("You can only buy whole shares of stocks");
        }
        
        $rows = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
                        
        $stock = lookup($_POST["symbol"]);
        if ($stock === false)
        {
            apologize("Sorry the symbol you enter isn't exit.");
        }
        
        $invest = $_POST["shares"] * $stock["price"];
        
        if($invest > $rows[0]["cash"])
        {
            apologize("Sorry, you don't enough money.");
        }
        
        $rows = CS50::query("INSERT INTO portfolios (userid, symbol, shares) 
                            VALUES(?, ?, ?) 
                            ON DUPLICATE KEY UPDATE shares = (shares + ?)",
                            $_SESSION["id"], strtoupper($_POST["symbol"]), $_POST["shares"], $_POST["shares"]);
                            
        $rows = CS50::query("UPDATE users SET cash = (cash - ?) WHERE id = ?", $invest, $_SESSION["id"]);
        
        $row = CS50::query("INSERT INTO history (userid, symbol, shares)
                            VALUES(?, ?, ?)",
                            $_SESSION["id"], strtoupper($_POST["symbol"]), $_POST["shares"]);
        
       redirect("/");
    }
    
?>

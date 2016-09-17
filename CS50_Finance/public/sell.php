<?php

    // configuration
    require("../includes/config.php"); 
    
     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell"]);
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
            apologize("You can only sell whole shares of stocks");
        }
        
        $rows = CS50::query("SELECT symbol, shares FROM 
                        portfolios WHERE 
                        userid = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]
                        );
                        
        if(count($rows) >= 1)
        {
            $stock = lookup($_POST["symbol"]);
            
            if($_POST["shares"] > $rows[0]["shares"])
            {
                apologize("Sorry, you don't enough stocks for sell.");
            }
            if ($_POST["shares"] < $rows[0]["shares"])
            {   
                $rows = CS50::query("UPDATE portfolios SET shares = (shares - ?) WHERE userid = ? AND symbol = ?", 
                                    $_POST["shares"], $_SESSION["id"], $_POST["symbol"] );
            }
            if ($_POST["shares"] == $rows[0]["shares"])
            {
                $rows = CS50::query("DELETE FROM portfolios WHERE symbol = ? AND userid = ?", $_POST["symbol"], $_SESSION["id"] );
            }
            
            $total_sell = $stock["price"] * $_POST["shares"];
            $rows = CS50::query("UPDATE users SET cash = (cash + ?) WHERE id = ?", $total_sell, $_SESSION["id"] );
            
            $row = CS50::query("INSERT INTO history (userid, symbol, shares)
                            VALUES(?, ?, ?)",
                            $_SESSION["id"], $_POST["symbol"], $_POST["shares"]);
        }
       
         redirect("/");
    }
    
?>

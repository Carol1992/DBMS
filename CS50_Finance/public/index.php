<?php

    // configuration
    require("../includes/config.php"); 
    
    $rows = CS50::query("SELECT username, cash, symbol, shares FROM 
                        users, portfolios WHERE 
                        users.id = portfolios.userid AND 
                        users.id = ?", $_SESSION["id"]
                        );
    $username = $rows[0]["username"];
    $positions = [];

    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
                
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"],
                "total" => number_format(($stock["price"]*$row["shares"]),2)
            ];
        }
    }
    $row = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    
    // render portfolio
    render("portfolio.php", ["username" => $username, "cashBalance" => number_format($row[0]["cash"],2), "positions" => $positions, "title" => "Portfolio"]);

?>

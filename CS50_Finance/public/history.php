<?php

    // configuration
    require("../includes/config.php"); 
    
    $rows = CS50::query("SELECT username, symbol, shares, time FROM 
                        users, history WHERE 
                        users.id = history.userid AND 
                        users.id = ?", $_SESSION["id"]
                        );
                        
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
                "total" => ($stock["price"] * $row["shares"]),
                "time" => $row["time"]
            ];
        }
    }

    
    
    // render portfolio
    render("history_record.php", ["positions" => $positions, "title" => "History"]);

?>

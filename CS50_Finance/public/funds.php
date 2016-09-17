<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("funds_form.php", ["title" => "Deposit"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["funds"]) || $_POST["funds"] <= 0 || !is_numeric($_POST["funds"]))
        {
            apologize("Sorry, funds should be numbers and must greater than 0");
        }
     
        // query database for user
        $rows = CS50::query("UPDATE users SET cash = (cash + ?) WHERE id = ?", $_POST["funds"], $_SESSION["id"]);

        if (count($rows) != 1)
        {
            apologize("System busy, please try again.");
        }

        // redirect to portfolio
            redirect("/");
        
    }

?>

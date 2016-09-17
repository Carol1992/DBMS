<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["password2"]))
        {
            apologize("You must provide your enough information.");
        }
        if ($_POST["password"] != $_POST["password2"])
        {
            apologize("You must provide same password.");
        }

        // query database to insert user
        $rows = CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)",
                            $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        if ($rows != 1)
        {
            // the INSERT failed, presumably because username already existed
            apologize("Sorry, the username exist, please choose another one!");
        }
        
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        // remember that user's now logged in by storing user's ID in session
        $_SESSION["id"] = $id;

        // redirect to portfolio
        redirect("/");
        
    }

?>

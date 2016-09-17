<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("chpwd_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["password"]))
        {
            apologize("You must provide your new password.");
        }
        if (empty($_POST["password2"]))
        {
            apologize("You must confirmed your new password.");
        }
        if ($_POST["password"] != $_POST["password2"])
        {
            apologize("You must provide same password.");
        }

        // query database for user
        $rows = CS50::query("UPDATE users SET hash = ? WHERE id = ?", password_hash($_POST["password"], PASSWORD_DEFAULT), $_SESSION["id"]);

        if (count($rows) != 1)
        {
            apologize("System busy, please try again.");
        }

        // redirect to portfolio
            redirect("/");
        
    }

?>

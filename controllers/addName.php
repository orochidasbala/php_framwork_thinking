<?php

    $database->insert([
        "name" => $_POST['name']
    ], "users");

    header("Location: /");
    
    // require "views/name.view.php";
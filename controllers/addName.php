<?php

if ($_POST['name']) {
    $database->insert([
        "name" => $_POST['name']
    ], "users");
    header("Location: /");
} else {
    header("Location: /");
}
    

<?php

if ($_POST['name']) {
    App::get('database')->insert([
        "name" => $_POST['name']
    ], "users");
    header("Location: /");
} else {
    header("Location: /");
}
    

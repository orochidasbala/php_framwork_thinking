<?php

    $router->get("", "controllers/Home.php");
    $router->get("about", "controllers/About.php");
    $router->get("contact", "controllers/Contact.php");
    $router->get("order", "controllers/Order.php");
    $router->get("categories", "controllers/Category.php");
    $router->post("names", "controllers/addName.php");

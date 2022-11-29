<?php

    $router->get("", "Pages@index");
    $router->get("about", "Pages@about");
    $router->get("contact", "Pages@contact");
    $router->post("delete", "Pages@delete");
    $router->post("names", "Pages@addname");

<?php

use controller\Pages;

$router->get("", [Pages::class, "index"]);
$router->get("about", [Pages::class, "about"]);
$router->get("contact", [Pages::class, "contact"]);
$router->post("delete", [Pages::class, "delete"]);
$router->post("names", [Pages::class, "addname"]);

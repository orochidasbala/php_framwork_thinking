<?php

require "vendor/autoload.php";
require "core/bootup.php";

// define("GERRTING", "Hello World");
// dd(GERRTING);

require Router::load("routes.php")->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
<?php

require "vendor/autoload.php";
require "core/bootup.php";

require Router::load("routes.php")->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
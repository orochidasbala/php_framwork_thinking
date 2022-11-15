<?php

require "core/bootup.php";

require Router::load("routes.php")->direct(Request::uri());
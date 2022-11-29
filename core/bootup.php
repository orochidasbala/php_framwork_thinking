<?php

require "core/functions.php";

// $config = require "config.php";
// $database = new QueryBuilder(
//     Connection::make($config['database'])
// );

App::bind("config", require "config.php");
App::bind("database", new QueryBuilder(
    Connection::make(App::get("config")['database'])
));
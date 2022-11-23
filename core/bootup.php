<?php

require "core/functions.php";

$config = require "config.php";
$database = new QueryBuilder(
    Connection::make($config['database'])
);


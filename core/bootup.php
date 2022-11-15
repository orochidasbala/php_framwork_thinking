<?php

require "core/functions.php";
require "core/Router.php";
require "core/Request.php";
require "core/databases/Connection.php";
require "core/databases/QueryBuilder.php";


$config = require "config.php";
$query = new QueryBuilder(
    Connection::make($config['database'])
);


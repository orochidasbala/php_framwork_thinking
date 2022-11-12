<?php

    require "functions.php";
    require "Router.php";
    require "databases/Connection.php";
    require "databases/QueryBuilder.php";

    $config = require "config.php";
    $query = new QueryBuilder(
        Connection::make($config['database'])
    );

<?php

$tasks = $query->selectAll("tasks");

require "view/index.view.php";

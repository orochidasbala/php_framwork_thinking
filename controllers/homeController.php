<?php


$tasks = $query->selectAll("tasks");
// dd("hi there, it's still working!");

require "views/index.view.php";
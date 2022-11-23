<?php

    $database->delete($_REQUEST['id'], "users");
    
    header("Location: /");


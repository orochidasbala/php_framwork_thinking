<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=todo", "root", "admin");
    echo "Connection successful";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$statment = $pdo->prepare("select * from tasks");
$statment->execute();

$tasks = $statment->fetchAll(PDO::FETCH_OBJ);


require "index.view.php";
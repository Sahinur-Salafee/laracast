<?php

require 'functions.php';

// require 'router.php';

// connect to database

$dsn = "mysql:host=localhost;port=3307;dbname=laracast;user=root;charset=utf8m";

$pdo = new PDO($dsn);

// Prepare statements.
$statements = $pdo->prepare("SELECT * FROM `posts`");

// Execute
$statements-> execute();

$posts = $statements-> fetchAll();

dd($posts);
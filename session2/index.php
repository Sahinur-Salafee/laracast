<?php

require 'functions.php';

// require 'router.php';

// connect to database

$dsn = "mysql:host=localhost;port=3307;dbname=laracast;charset=utf8m";

$pdo = new PDO($dsn);

$statements = $pdo->prepare("SELECT * FROM `posts`");
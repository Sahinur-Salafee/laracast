<?php

require 'functions.php';

// require 'router.php';

// connect to database

// Database configuration
$host = 'localhost';  // Database host
$port = '3306';       // Database port
$db = 'laracast';     // Database name
$user = 'root';       // Database username
$pass = '';           // Database password
$charset = 'utf8mb4'; // Character set

// Data Source Name (DSN)
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $user, $pass);
    echo "Database connection successful!<br>";

    // Prepare statements
    $statements = $pdo->prepare("SELECT * FROM posts");

    // Execute
    $statements->execute();

    // Fetch all posts
    $posts = $statements->fetchAll();

    // Output the fetched posts
    foreach ($posts as $post) {
        echo $post['title'] . "<br>";
    }
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage() . "<br>";
    echo "Error code: " . (int)$e->getCode();
    exit();
}

dd($posts);
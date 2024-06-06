<?php

require 'functions.php';

// require 'router.php';

// connect to database

// Database configuration
class Database {

    public $connection;
    public function __construct()
    {
        $host = 'localhost';  // Database host
        $port = '3306';       // Database port
        $db = 'laracast';     // Database name
        $user = 'root';       // Database username
        $pass = '';           // Database password
        $charset = 'utf8mb4'; // Character set

        // Data Source Name (DSN)
        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

        // Create a PDO instance (connect to the database)
        $this-> connection = new PDO($dsn, $user, $pass);
    }
    
    public function query($query) {
        echo "Database connection successful!<br>";

        // Prepare statements
        $statements = $this->connection->prepare($query);

        // Execute
        $statements->execute();

        // Fetch all posts
       return $statements->fetchAll(PDO::FETCH_ASSOC);
    }
}

$database = new Database();
$posts = $database->query("SELECT * FROM posts");

// Output the fetched posts
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . "</li>";
}


dd($posts);
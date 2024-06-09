<?php

// Database configuration
class Database {

    public $connection;
    public function __construct($config)
    {

        // Data Source Name (DSN)
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";

        // $dsn = 'mysql:'. http_build_query($config, '', ';');

        // Create a PDO instance (connect to the database)
        $this-> connection = new PDO($dsn,'root','',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    
    public function query($query) {
        echo "Database connection successful!<br>";

        // Prepare statements
        $statements = $this->connection->prepare($query);

        // Execute
        $statements->execute();

        // Fetch all posts
       return $statements;
    }
}
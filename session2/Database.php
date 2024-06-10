<?php

// Database configuration
class Database {

    public $connection;
    public function __construct($config, $usename = 'root', $password = '')
    {

        // Data Source Name (DSN)
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";

        // $dsn = 'mysql:'. http_build_query($config, '', ';');

        // Create a PDO instance (connect to the database)
        // PDO:: ATTR_DEFAULT_FETCH_MODE: Set the default fetch mode for this connection
        $this-> connection = new PDO($dsn,$usename,$password,[
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
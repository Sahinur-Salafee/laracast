<?php
class Database {
    protected $connection;

    public function __construct($config, $username = 'root', $password = '') {
        // Data Source Name (DSN)
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";

        try {
            // Create a PDO instance (connect to the database)
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            echo "Database connection successful!<br>";
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($query, $parameters = []) {
        try {
            // Prepare statements
            $statement = $this->connection->prepare($query);

            // Execute with parameters
            $statement->execute($parameters);

            // Return the statement
            return $statement;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
}
?>

<?php

require 'functions.php';

 require 'router.php';

// connect to database
require 'Database.php';

$config = require 'config.php';

$database = new Database($config);
// database query
$query = "SELECT * FROM notes WHERE user_id = 2";

// Fetch all posts
// $posts = $database->query($query)->fetchAll(PDO::FETCH_ASSOC);
$notes = $database->query($query)->fetchAll();

// Output the fetched posts
foreach ($notes as $note) {
    echo '<li>' . $note['body'] . "</li>";
}


dd($notes);

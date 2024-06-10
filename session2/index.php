<?php

require 'functions.php';

// require 'router.php';

// connect to database
require 'Database.php';

$config = require 'config.php';

$database = new Database($config);
$query = "SELECT * FROM posts WHERE id=1";
$posts = $database->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Output the fetched posts
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . "</li>";
}


dd($posts);
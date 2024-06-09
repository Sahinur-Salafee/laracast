<?php

require 'functions.php';

// require 'router.php';

// connect to database
require 'Database.php';

$config = require 'config.php';

$database = new Database($config);
$posts = $database->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

// Output the fetched posts
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . "</li>";
}


dd($posts);
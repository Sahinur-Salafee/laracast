<?php

require 'functions.php';

// require 'router.php';

// connect to database
require 'Database.php';



$database = new Database();
$posts = $database->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

// Output the fetched posts
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . "</li>";
}


dd($posts);
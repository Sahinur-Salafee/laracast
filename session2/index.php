<?php

require 'functions.php';
 require 'router.php';
//  require 'views/index.view.php';

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
?> <ul> 

<?php
foreach ($notes as $note): ?>
    <li>
        <a href="note.php?<?php echo $note['id']; ?>"> 
            
            <?php 
                echo htmlspecialchars($note['body']);  // escape output
            ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<a href="create.php" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>

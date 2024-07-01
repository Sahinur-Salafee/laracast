<?php 

require './../session2/views/partials/header.php';
require 'functions.php';
// connect to database
require 'Database.php';

$config = require 'config.php';
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES (NULL, 'Hello there.', '2');
    $db->query('INSERT INTO notes (id, body, user_id) VALUES (:id, :body, :user_id)', [
        'id' => NULL,
        'body' => $_POST['body'],
        'user_id' => 2
    ]);
}

?>
<div class="mx-auto max-w-7xl py-10">
    <form method="POST" class="bg-white rounded-md px-10 pt-5 pb-20">
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here is your note idea..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</div>



<?php

dd($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo "Form submitted";
}


require './../session2/views/partials/footer.php';
<?php 

require './../session2/views/partials/header.php';
require 'functions.php';
// connect to database
require 'Database.php';
require 'Validator.php';

$config = require 'config.php';
$db = new Database($config);

// $validator = new Validator();
//$validator-> stringSize('hello', 1, 10);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST request
    $body = $_POST['body'];
    $user_id = 4;
    $errors = [];

    if(! Validator::stringSize($body, 1, 1000)) {
       $errors['body'] = "The body field is minimum 1 to maximum 1000 required.";
    }

    // Ensure required data is available
    // Prepare SQL query
    if(empty($errors)) {

        $sql = "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)";
        
        // Execute query with parameters
        $db->query($sql, [
            ':body' => $body,
            ':user_id' => $user_id
        ]);
        echo "New note added successfully.";
    }
}
?>
<div class="mx-auto max-w-7xl py-10">
    <form method="POST" class="bg-white rounded-md px-10 pt-5 pb-20">
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <textarea id="about" name="body" rows="3" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here is your note idea..."><?php  isset($body) ? $body : ''; ?></textarea>
                            <?php if(isset($errors['body'])): ?>
                                <p class="text-red-500 text-sm mt-1"><?php echo $errors['body']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
    <a href="index.php" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">note list</a>
</div>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo "Form submitted";
}


require './../session2/views/partials/footer.php';
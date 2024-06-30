<?php 

require './../session2/views/partials/header.php';

?>

<form class="m-10 max-w-9xl w-300">
    <p>
        <label for="note">Description</label>
    </p>
    <textarea id="note" name="body" class="w-400"></textarea>
    <p>
        <button class="my-5 py-2 px-3 bg-blue-900 text-white rounded">Create</button>
    </p>
</form>
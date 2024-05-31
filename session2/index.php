<?php 

$heading = 'Home';


// Die and Dump
function dd($value) {
    var_dump($value);

    die();
}

echo $_SERVER['REQUEST_URI'];

require('views/index.view.php');
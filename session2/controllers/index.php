<?php 
require('./../functions.php');
$heading = 'Home';
require('./../views/index.view.php');

dd($_SERVER);


// Die and Dump
// function dd($value) {
//     var_dump($value);

//     die();
// }

// echo $_SERVER['REQUEST_URI'];

// if($_SERVER['REQUEST_URI'] === '/index.php') { echo 'bg-gray-900 text-white';} else {echo 'text-gray-300';}
// $_SERVER['REQUEST_URI'] = 1;
// echo $_SERVER['REQUEST_URI'] === 1 ? 'bg-gray-900 text-white' : 'text-gray-300';

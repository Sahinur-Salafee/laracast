<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];
echo $uri;

var_dump($uri);

echo '<pre>';
print_r($_SERVER);
echo '</pre>';


if($uri === '/laracast/session2/index.php') {
    require '/laracast/session2/controllers/index.php';
} elseif($uri === '/laracast/session2/about.php') {
    require '/laracast/session2/controllers/about.php';
} elseif($uri === '/laracast/session2/contact.php') {
    require '/laracast/session2/controllers/contact.php';
}
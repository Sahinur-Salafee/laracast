<?php

require 'functions.php';

$url = $_SERVER['REQUEST_URI'];
echo $url;

if($url === '/session2/') {
    require 'controllers/index.php';
} elseif($url === '/session2/about') {
    require 'controllers/about.php';
} elseif($url === '/session2/contact') {
    require 'controllers/about.php';
} else {
    require 'controllers/404.php';
}
<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'] ;

$routes = [
    '/' => 'index.php',
    '/about' => './../session2/controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routerControls($url, $routes) {
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";    
}

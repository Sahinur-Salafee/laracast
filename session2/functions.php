<?php

function dd($value) {
    var_dump($value);

    die();
}

$_SERVER['REQUEST_URI'] = 1;
// echo $_SERVER['REQUEST_URI'] === 1 ? 'bg-gray-900 text-white' : 'text-gray-300';

/**
 * Pass nav URL
 */
function urlIs($value) {
   return $_SERVER['REQUEST_URI'] === $value;
}


<?php

function dd($value) {
    var_dump($value);
    die();
}

/**
 * Pass nav URL
 */
function urlIs($value) {
   return $_SERVER['REQUEST_URI'] === $value;
}
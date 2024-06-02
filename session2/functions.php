<?php

function dd($value) {
    var_dump($value);

    die();
}

/**
 * Pass nav URL
 */
function urlIs($value) {
   return $_SERVER['SCRIPT_NAME'] === $value;
}


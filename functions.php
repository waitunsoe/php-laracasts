<?php

function dd($value)
{
    echo '<pre>';
    if (is_array($value)) {
        print_r($value);
    } else {
        var_dump($value);
    }
    echo '</pre>';
    die();
}

function uriIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

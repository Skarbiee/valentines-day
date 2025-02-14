<?php

require_once '../app/core/Functions.php';
displayErrorsPHP();

dd(getenv());

$request = $_SERVER['REQUEST_URI'];

function includeComponent($component)
{
    include '' . $component . '.html';
}


switch ($request) {
    case '/':
    case '/home':
        includeComponent('index');
        break;
    default:
        includeComponent('includes/404');
        break;
}
?>
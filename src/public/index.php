<?php

require_once '../app/core/Functions.php';
displayErrorsPHP();

dd(getenv());

$request = $_SERVER['REQUEST_URI'];

function includeComponent($component)
{
    include __DIR__ .'/../app/views/layout/header.php';
    include __DIR__ .'/../app/views/layout/head.php';
    include __DIR__ .'/../app/views/' . $component . '.php';
    include __DIR__ .'/../app/views/layout/footer.php';
}


switch ($request) {
    case '/':
    case '/home':
        includeComponent('home');
        break;
    case '/heart':
        includeComponent('heart');
        break;
    case '/cards':
        includeComponent('cards');
        break;
    case '/contact':
        includeComponent('contact');
        break;
    default:
        includeComponent('404');
        break;
}
?>
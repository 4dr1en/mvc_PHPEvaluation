<?php
session_start();
include('model/pdoConnexion.php');

$path= explode('?', $_SERVER['REQUEST_URI'])[0];
switch ($path) {
    case '/':
        include 'controler/home.php';
        break;
    case '/login':
        include 'controler/login.php';
        break;
    case '/register':
        include 'controler/register.php';
        break;
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); 
        include 'view/404view.php';
        break;

}


<?php
session_start();

//log
include('./model/logs.php');
$logsManager= new LogsManager();
$idUserLog= null;
if(isset($_SESSION['id'])){
    $idUserLog= $_SESSION['id'];
}
//end log

$path= explode('?', $_SERVER['REQUEST_URI'])[0];
switch ($path) {
    case '/':
    case '/index':
        $logsManager->pushLog('pageVisited', 'index', $idUserLog);
        include 'controller/home.php';
        break;
    case '/login':
        $logsManager->pushLog('pageVisited', 'login', $idUserLog);
        include 'controller/login.php';
        break;
    case '/register':
        $logsManager->pushLog('pageVisited', 'register', $idUserLog);
        include 'controller/register.php';
        break;
    case '/profile':
        $logsManager->pushLog('pageVisited', 'profile', $idUserLog);
        include 'controller/profile.php';
        break;
    case '/products':
        $logsManager->pushLog('pageVisited', 'products', $idUserLog);
        include 'controller/products.php';
        break;
    case '/logsboard':
        $logsManager->pushLog('pageVisited', 'logs', $idUserLog);
        include 'controller/logsboard.php';
        break;
    case '/logout':
        $logsManager->pushLog('disconnection', 'disconnection', $idUserLog);
        include 'controller/logout.php';
        break;
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); 
        include 'controller/404.php';
        break;
}



/**/

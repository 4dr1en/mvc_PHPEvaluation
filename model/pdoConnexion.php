<?php

$db= null;
try{
    $db= new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (PDOException $e){
    die('Erreur : ' . $e->getMessage());
}
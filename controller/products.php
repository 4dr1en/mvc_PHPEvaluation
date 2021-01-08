<?php
if(isset($_SESSION['id'], $_GET['action'], $_GET['content'])){
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    if($_GET['action'] == 'add'){
        switch($_GET['content']){
            case 'quartz':
                $_SESSION['cart'][]= 'Quartz';
                break;
            case 'ametyst':
                $_SESSION['cart'][]= 'Ametyst';
                break;
            case 'pinkQuartz':
                $_SESSION['cart'][]= 'Pink Quartz';
                break;
            case 'lapislazuli':
                $_SESSION['cart'][]= 'Lapis Lazuli';
                break;
            case 'beryl':
                $_SESSION['cart'][]= 'Beryl';
                break;
        }
    }
}

$PAGE['additionalCSS']= './public/style/products.css';
$PAGE['mainSectionHtml']= './view/products_view.php';
include('./view/view.php');
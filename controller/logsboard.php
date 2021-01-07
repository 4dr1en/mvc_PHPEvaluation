<?php

$PAGE['additionalCSS']= '/public/style/logsboard.css';
$PAGE['additionalJS']= './public/script/logsboard.js';

if(isset($_GET['action'], $_GET['log']) && file_exists('./logs/'.$_GET['log'])){

    if($_GET['action'] == 'consult'){
        $logpath= './logs/'.$_GET['log'];
        $logs= $logsManager->getLogsFromFile($logpath, 'r');

        $PAGE['mainSectionHtml']= './view/logsDisplay_view.php';
        include('./view/view.php');
    }
    if($_GET['action'] == 'delete'){
        $logsManager->deleteFilelog('./logs/'.$_GET['log']);

        $PAGE['mainSectionHtml']= './view/logsboard_view.php';
        include('./view/view.php');
    }
    if($_GET['action'] == 'deleteLine' && isset($_GET['line'])){
        $logsManager->modifyLog('./logs/'.$_GET['log'], $_GET['line']);
    }
}
elseif(isset($_POST['modify'], $_POST['textLog'], $_POST['file'], $_POST['id'])){
    $logsManager->modifyLog($_POST['file'], $_POST['id'], $_POST['textLog']);

    $PAGE['mainSectionHtml']= './view/logsboard_view.php';
    include('./view/view.php');
}
else{
    $PAGE['mainSectionHtml']= './view/logsboard_view.php';
    include('./view/view.php');
}

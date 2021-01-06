<?php

$PAGE['additionalCSS']= '/public/style/logsboard.css';


if(isset($_GET['action'], $_GET['log']) && file_exists('./logs/'.$_GET['log'])){
    if($_GET['action'] == 'consult'){
        $logs= $logsManager->getLogsFromFile('./logs/'.$_GET['log'], 'r');

        $PAGE['mainSectionHtml']= './view/logsDisplay_view.php';
        include('./view/view.php');
    }
    if($_GET['action'] == 'delete'){
        $logs= $logsManager->deleteFilelog('./logs/'.$_GET['log']);

        $PAGE['mainSectionHtml']= './view/logsboard_view.php';
        include('./view/view.php');
    }
}
else{
   $PAGE['mainSectionHtml']= './view/logsboard_view.php';
    include('./view/view.php');
}

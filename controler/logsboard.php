<?php
if(isset($_GET['action'], $_GET['log']) && $_GET['action'] == 'consult' && file_exists('./logs/'.$_GET['log'])){
    $logs= $logsManager->getLogsFromFile('./logs/'.$_GET['log'], 'r');

    $PAGE['mainSectionHtml']= './view/logsDisplay_view.php';
    include('./view/view.php');
}
else{
   $PAGE['mainSectionHtml']= './view/logsboard_view.php';
    include('./view/view.php');
}

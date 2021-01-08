<?php

if(isset($_SESSION['id'], $_SESSION['user'])){
    $PAGE['mainSectionHtml']= './view/profile_view.php';
    $PAGE['additionalCSS']= '/public/style/profile.css';
    include('./view/view.php');
}
else{
    $PAGE['mainSectionHtml']= './view/404_view.php';
    include('./view/view.php');
}




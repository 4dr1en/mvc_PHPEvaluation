<?php

$verify = false;
if (isset($_POST['pwd'])) {
    $filePwd = fopen('pwd', 'r');

    while ($line = fgets($filePwd)) {
        $elems = explode(' ', trim($line));
        $hash = $elems[0];
        $firstname = $elems[1];
        if (password_verify($_POST['pwd'], trim($hash))) {
            $verify = true;
            $_SESSION['firstname'] = $firstname;
            break;
        }
    }
}
include('./view/login_view.php');


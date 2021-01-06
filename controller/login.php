<?php

$verify = false;
if (isset($_POST['pwd'], $_POST['firstname'])) {
    $filePwd = fopen('users', 'r');

    while ($line = fgets($filePwd)) {
        $elems = explode(' ', trim($line));
        $id = $elems[0];
        $user= unserialize($elems[1]);
        if ($_POST['firstname'] == $user['firstname'] && password_verify($_POST['pwd'], $user['password'])) {
            $verify = true;
            $_SESSION['id'] = $id;
            $_SESSION['user'] = $user;
            $logsManager->pushLog('login', 'login', $id);
            break;
        }
    }
}
include('./view/login_view.php');


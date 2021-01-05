<?php

$error = false;
$txtErrors = [];

//validation firstname
if (strlen($_POST['firstname']) < 1) {
    $error = true;
    $txtErrors[] = 'Votre prénom doit faire au moins 1 caractère';
}

//validation pwd
if (!isset($_POST['pwd1'], $_POST['pwd2'])) {
    $error = true;
    $txtErrors[] = 'Erreure reception mots de passes';
} elseif ($_POST['pwd1'] != $_POST['pwd2']) {
    $error = true;
    $txtErrors[] = 'Les mots de passes doivent êtres identiques';
} elseif (strlen($_POST['pwd1']) < 8) {
    $error = true;
    $txtErrors[] = 'Votre mot de passe doit faire au moins 8 caractères';
}

//validation phone number
if (!preg_match('/([0-9]{2}\.?){4}[0-9]{2}/', $_POST['tel'])) {
    $txtErrors[] = 'Le numero de téléphone saisi est invalide';
}

//validation email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $txtErrors[] = 'L\'adresse mail saisi est invalide';
}

//saving the password
if (!$error) {
    $hash = password_hash($_POST['pwd1'], PASSWORD_ARGON2ID);
    $filePwd = fopen('pwd', 'a');
    fwrite($filePwd, $hash.' '. $_POST['firstname'] . PHP_EOL);
    echo 'ok';
}

include('./view/registerView.php');
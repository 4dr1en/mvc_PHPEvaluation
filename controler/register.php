<?php

$error = false;
$txtErrors = [];
$newUserRegistered= false;
if(isset($_POST['registration'])){
    //validation firstname, lastname and gender
    if (!isset($_POST['firstname']) || strlen($_POST['firstname']) < 1) {
        $error = true;
        $txtErrors[] = 'You must enter your first name';
    }

    if (!isset($_POST['lastname']) || strlen($_POST['lastname']) < 1) {
        $error = true;
        $txtErrors[] = 'You must enter your last name';
    }

    if (!isset($_POST['gender']) || !in_array($_POST['gender'], ['female', 'male', 'ns'])) {
        $error = true;
        $txtErrors[] = 'You must enter your last name';
    }

    //validation pwd
    if (!isset($_POST['pwd1'], $_POST['pwd2'])) {
        $error = true;
        $txtErrors[] = 'Passwords reception error';
    } elseif ($_POST['pwd1'] != $_POST['pwd2']) {
        $error = true;
        $txtErrors[] = 'The passwords must be the same';
    } elseif (strlen($_POST['pwd1']) < 8) {
        $error = true;
        $txtErrors[] = 'Your password must be at least 8 characters long';
    }

    //validation phone number
    if (!isset($_POST['phone']) || !preg_match('/([0-9]{2}\.?){4}[0-9]{2}/', $_POST['phone'])) {
        $error = true;
        $txtErrors[] = 'The phone number entered is not valid.';
    }

    //validation email
    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $txtErrors[] = 'The email address entered is not valid.';
    }

    //saving the informations
    if (!$error) {
        $hash = password_hash($_POST['pwd1'], PASSWORD_ARGON2ID);
        $user= [
            'firstname'=> htmlspecialchars($_POST['firstname']),
            'lastname'=> htmlspecialchars($_POST['lastname']),
            'password'=> $hash,
            'gender'=> $_POST['gender'],
            'phone'=> htmlspecialchars($_POST['phone']),
            'email'=> htmlspecialchars($_POST['email'])
        ];

        $filePwd = fopen('pwd', 'r+');
        while($line= fgets($filePwd)){ //the new id = the very last id + 1
            $id= ((int) explode(' ', $line)[0]) + 1;
        }
        $newUserRegistered= fwrite($filePwd, $id.' '.serialize ($user) . PHP_EOL);
    }
}

$PAGE['mainSectionHtml']= './view/registerView.php';
include('./view/view.php');
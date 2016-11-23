<?php

include 'lib/common.php';
include 'lib/article_db.php';
include 'lib/user_db.php';
include 'templates/header.phtml';

if(empty($_POST)) {
    include 'templates/login.phtml';
} else {
    $user = user_read($gPDO, $_POST['email']);
    // die(print_r($user));
    if(password_verify($_POST['password'], $user['password'])) {

        $_SESSION = $user;

        header('Location: admin.php');
    } else {
        header('Location: register.php');
    }
}
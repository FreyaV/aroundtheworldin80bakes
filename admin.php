<?php
include 'lib/common.php';
include 'lib/article_db.php';
include 'lib/user_db.php';
include 'templates/header.phtml';

if(empty($_SESSION)) {
    header('Location: login.php');
    die();
}

if(empty($_POST)) {
    include 'templates/admin.phtml';
} else {
    $_POST['author_id'] = $_SESSION['id'];      //add the logged-in user's id to the form information

    if(article_create($gPDO, $_POST)) {
        header('Location: index.php');
    } else {
        die("ERROR!");
    }
}
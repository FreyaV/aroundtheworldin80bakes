<?php

include 'lib/common.php';
include 'lib/article_db.php';
include 'lib/user_db.php';

if(empty($_GET['id'])) {
    die('ERROR - NO ID!');
}

if(!empty($_POST)) {
    $_POST['article_id'] = $_GET['id'];
    $_POST['author_id'] = $_SESSION['id'] ?? 1;
    $_POST['date_posted'] = date('d.m.Y');
    comment_create($gPDO, $_POST);
}


$article = article_read_id($gPDO, $_GET['id']);
$comments = article_comments($gPDO, $_GET['id']);


# needs header...

include 'templates/header.phtml';
include 'templates/view.phtml';
include 'templates/comments.phtml';
include 'templates/footer.phtml';

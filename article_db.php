<?php
// CRUD == create read update delete

function article_read_latest($pdo) {
    $results = $pdo->query('SELECT * FROM articles ORDER BY id DESC LIMIT 10');

    return $results;
}

function article_read_id($pdo, $id) {
    $query = $pdo->prepare('SELECT * FROM articles, users WHERE articles.author_id = users.id AND articles.id = :id');
    $success = $query->execute(['id' => $id]);

    return $query->fetch(PDO::FETCH_ASSOC);
}

function article_create($pdo, $article) {
    $query = $pdo->prepare('INSERT INTO articles(body, author_id) VALUES(:body, :author_id)');
    $success = $query->execute($article);

    return $success;
}

function article_update($pdo) {}
function article_delete($pdo) {}


function article_comments($pdo, $article_id) {
  $query = $pdo->prepare('SELECT * FROM comments, users WHERE article_id = :article_id AND comments.author_id = users.id');
  $query->execute(['article_id' => $article_id]);

  return $query;
}

    function comment_read_id($pdo, $comment_id) {
        $query = $pdo->prepare('SELECT * FROM comments, comments_users, articles WHERE comments.author_id = comments_users.author_id AND comments.id AND articles.id = :commentid');
        $success = $query->execute(['commentid' => $commentid]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function comment_create($pdo, $comments) {
        $query = $pdo->prepare('INSERT INTO comments(comment, article_id, author_id, date_posted) VALUES(:comment, :article_id, :author_id, :date_posted)');
        $success = $query->execute($comments);

        return $success;
    }

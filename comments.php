<?php

function addcommenttopost($pdo) {
    $results = $pdo->query('SELECT * FROM comments ORDER BY id, author_id, date_posted');

    return $results;
  }

?>

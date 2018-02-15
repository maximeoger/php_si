<?php

require_once "connexion_db.php";

$delete_query = "
DELETE FROM
  `post`
WHERE
id = :id
;";

$stmt = $conn->prepare($delete_query);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('Location: index.php');
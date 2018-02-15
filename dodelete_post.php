<?php

require_once "connexion_db.php";

//var_dump($_get["id"]);

$delete_query = " DELETE 
 FROM
  `post`
 WHERE
id = :id
;";

$stmt = $conn->prepare($delete_query);
$stmt->bindValue(':id', $_GET["id"]);
$stmt->execute();

header('Location: index.php');
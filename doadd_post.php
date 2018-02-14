<?php

require_once "connexion_db.php";

if (empty($_POST['content']) )
{

    var_dump($_POST['content']);
    exit;

}

$post_query = " 
  INSERT INTO 
    `post`
  (`id`, `content`) 
  VALUES 
  (NULL, :content)
  ;";

$stmt = $conn->prepare($post_query);
$stmt->bindValue(':content', $_POST['content']);
$stmt->execute();


header('Location: index.php?id='.$conn->lastInsertId());



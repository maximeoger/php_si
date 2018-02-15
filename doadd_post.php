<?php

require_once "connexion_db.php";

if (empty($_POST['content']) )
{

    header('Location: index.php?nopostdata');
    exit;

}

$post_query = " 
  INSERT INTO 
    `post`
  (`content`) 
  VALUES 
  (:content)
  ;";

$stmt = $conn->prepare($post_query);
$stmt->bindValue(':content', $_POST['content']);
$stmt->execute();


header('Location: index.php?id='.$conn->lastInsertId());



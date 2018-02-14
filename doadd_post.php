<?php

// d'abbord, on teste si les champs obligatoires ne sont pas existant if( !isset ) signifie : non égal à isset . si c'est le cas , il ajoute l'utilisateur à la bdd sinon il renvoie une erreur
/*

if (!isset($_POST['content']) )
{

    header('Location: index.php?nopostdata');
    exit;
}

require_once "connexion_db.php";

$post_query = " INSERT INTO `post`
 (`id`, `content`)
 VALUES
 (NULL, :content)
;";




$post_stmt = $conn->prepare($post_query);

$post_stmt->bindValue(':content', $_POST[content]);
$post_stmt->execute();


header('Location: index.php?id='.$conn->lastInsertId());

*/

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



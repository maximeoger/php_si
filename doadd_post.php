<?php

// d'abbord, on teste si les champs obligatoires ne sont pas existant if( !isset ) signifie : non égal à isset . si c'est le cas , il ajoute l'utilisateur à la bdd sinon il renvoie une erreur

if (
    !isset($_POST['status'])

){
    header('Location: index.php?nopostdata');
    exit;
}

require_once "connexion_db.php";

$requette = " INSERT INTO `post`
 (`id`, `content`)
 VALUES
 (NULL, :content)
;";



$stmt = $conn->prepare($requette);
$stmt->bindValue(':content', $_POST[status]);
$stmt->execute();


header('Location: index.php?id='.$conn->lastInsertId());
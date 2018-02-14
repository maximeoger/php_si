<?php

// d'abbord, on teste si les champs obligatoires ne sont pas existant if( !isset ) signifie : non égal à isset . si c'est le cas , il ajoute l'utilisateur à la bdd sinon il renvoie une erreur

if (
    !isset($_POST['status']) ||
    !isset($_POST['lastname']) ||
    !isset($_POST['birthdate']) ||
    !isset($_POST['fav']) ||
    !isset($POST['email']) ||
    !isset($_POST['password']) ||
) {
    header('Location: index.php?nopostdata');
    exit;
}
require_once "connexion_db.php";

$requette = " INSERT INTO
`post`
()
VALUES
(:name, :lastname, :birthdate, :fav, :email, :password,)
;";

$stmt = $conn->preprare($requette);
$stmt->bindValue(':nom', '$_POST[name]');
$stmt->bindValue(':lastname', '$_POST[lastname]');
$stmt->bindValue(':birthdate', '$_POST[birthdate]');
$stmt->bindValue(':fav', '$_POST[fav]');
$stmt->bindValue(':email', '$_POST[email]');
$stmt->bindValue(':password', '$_POST[password]');
$stmt->execute();

header('Location: details.php?id='.$conn->lastInsertId());
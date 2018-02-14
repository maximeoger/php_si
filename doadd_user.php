<?php

// d'abbord, on teste si les champs obligatoires ne sont pas existant if( !isset ) signifie : non égal à isset . si c'est le cas , il ajoute l'utilisateur à la bdd sinon il renvoie une erreur

if (
    !isset($_POST['name']) ||
    !isset($_POST['lastname']) ||
    !isset($_POST['birthdate']) ||
    !isset($_POST['fav']) ||
    !isset($_POST['email']) ||
    !isset($_POST['password'])
) {
    header('Location: add_user.php?nopostdata');
    exit;
    // si l'un des champs est vide, il renvoie sur a page actuelle avec une erreur dans le header
}

require_once "connexion_db.php"; // on appelle la base de données

$requette = " INSERT INTO `users`
 (`id`, `name`, `LASTNAME`, `birthdate`, `fav`, `email`, `password`)
 VALUES
 (NULL, :nom, :lastname, :birthdate, :fav, :email, :password)
;";

//** la requette SQL çi dessus permet d'ajouter les valeurs des champs
//* type="text" appelés via les variables ci dessous


$stmt = $conn->prepare($requette);
$stmt->bindValue(':nom', $_POST[name]);
$stmt->bindValue(':lastname', $_POST[lastname]);
$stmt->bindValue(':birthdate', $_POST[birthdate]);
$stmt->bindValue(':fav', $_POST[fav]);
$stmt->bindValue(':email', $_POST[email]);
$stmt->bindValue(':password', $_POST[password]);
$stmt->execute();



header('Location: index.php?id='.$conn->lastInsertId());
<?php


// si les champs 'name', 'lastname', 'birthdate' etc son vides ...

if ( empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['birthdate']) || empty($_POST['fav']) || empty($_POST['email']) || empty($_POST['password']))
{
    /*redirection vers la page add_user.php (celle çi) avec un paramètre indiquant qu'aucune donnée n'est entrée dans la base
     * et arrêt du script.
     */

    header('Location: add_user.php?nopostdata');
    exit;

}

/* rappel de la bdd */
require_once "connexion_db.php";


/* import des données saisies dans la bdd avec la requette SQL stockée dans la variable requette (elle n'est pas encore exécutée)*/

$requette = " INSERT INTO `users`
 (`name`, `lastname`, `birthdate`, `fav`, `email`, `password`)

 VALUES
 (:nom, :lastname, :birthdate, :fav, :email, :password)
;";



$stmt = $conn->prepare($requette);
$stmt->bindValue(':nom', $_POST['name']);
$stmt->bindValue(':lastname', $_POST['lastname']);
$stmt->bindValue(':birthdate', $_POST['birthdate']);
$stmt->bindValue(':fav', $_POST['fav']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':password', $_POST['password']);
$stmt->execute();

header('Location: index.php');
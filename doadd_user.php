<?php


if ( empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['birthdate']) || empty($_POST['fav']) || empty($_POST['email']) || empty($_POST['password']))
{
    header('Location: add_user.php?nopostdata');
    exit;

}

require_once "connexion_db.php";

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



header('Location: index.php?id='.$conn->lastInsertId());
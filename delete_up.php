<?php

require_once "connexion_db.php";

$requete= "DELETE FROM
    `si_php_211802`
    WHERE
    id = :id;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':id',$_POST['id']);
$stmt->execute();

header('location: index.php');
?>

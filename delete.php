<? php


require_once "connexion_db.php"; // on récupère la bdd

// on SUPPRIME l'ID et le CONTENT de la table post , ici la requette est juste définie dans une variable requette
$requete = 'DELETE
  `id`,
  `content`,
  FROM
  `post`
  WHERE
  id = :id
  ;';

$stmt=$conn->prepare($requete); // on prépare la requette
$stmt->bindValue(':id', $_GET['id']); // on associe la valeur de :id par l'id du post à supprimé que l'on récupère en GET dans l'url
$stmt->execute(); // on execute la requette
$row = $stmt->fetch(PDO::FETCH_ASSOC); // on récupère le résultats de la requette pour les stocker dans $row

?>

<? php


require_once "connexion_db.php";
$requete = 'DELETE
  `id`,
  `content`,
  FROM
  `post`
  WHERE
  id = :id
  ;';

$stmt=$conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
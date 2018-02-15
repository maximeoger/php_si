<?php

require_once "connexion_db.php";
$requete = "SELECT
`name`,
`lastname`
FROM
`users`
WHERE
id = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<header class="header">
   <nav class="wrapper">
      <p class="logo"><span class="light">My</span>Sport</p>
      <input class="style-button-search" type="text" name="pseudo" id="pseudo" placeholder="Search"/>
      <div class="nav-right-content">
         <strong><span class="light">Bonjour</span> <?=$row['name'].' '.$row['lastname']?> </strong>
      </div>
   </nav>
</header>
<?php

require_once "connexion_db.php";

$add_post = "SELECT * FROM post ORDER BY id DESC";

$stmt = $conn->prepare($add_post);
$stmt->execute();
$row = $stmt->fetchAll();

$requete = "SELECT
`id`,
`name`,
`lastname`
FROM
`users`
WHERE
id = :id
;";

if (isset($_GET['id'])){
    header('Location:index.php');
    exit;
};
?>

<div class="post-full wrapper-fil">

<?php foreach ($row as $article):?>
   <div class="post wrapper-fil">
      <p class="post-name"> Johan <span class="light">Laurot</span></p><p class="post-date">10/02/2028</p>
      <p class="post-article"><?=$article["content"];?></p>

      <ul class="ul-tools">
         <li>
             <a class="link-ul-tools" href="edit.php?id=<?=$article["id"];?>">Editer</a>
         </li>
         <li>
             <a class="link-ul-tools" href="dodelete_post.php?id=<?=$article["id"];?>">Supprimer</a>
         </li>
      </ul>

   </div>
</div>
<?php endforeach; ?>
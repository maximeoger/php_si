<?php

require_once "connexion_db.php";

$add_post = "
    SELECT
    `id`,
    `content`
    FROM post
    ;";

$stmt = $conn->prepare($add_post);
$stmt->execute();
$row = $stmt->fetchAll();
?>

<div class="post-full wrapper-fil">
<?php foreach ($row as $article) :?>
   <div class="post wrapper-fil">
      <p class="post-name">BOB Matt</p><p class="post-date">10/02/2028</p>
      <p class="post-article"><?=$article["content"]?></p>
      <ul class="ul-tools">
         <li>
             <a href="edit.php?id=<?=$article["id"];?>">Editer</a>
         </li>
         <li>
             <a href="dodelete_post.php?id=<?=$article["id"];?>">Supprimer</a>
         </li>
      </ul>
   </div>
</div>
<?php endforeach; ?>
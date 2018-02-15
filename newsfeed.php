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
?>

<div class="post-full wrapper-fil">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
   <div class="post wrapper-fil">
      <p class="post-name"> BOB Matt</p><p class="post-date">10/02/2028</p>
      <p class="post-article"><?=$row["content"]?></p>
      <ul class="ul-tools">
         <li><a class="post-tools" href="#">Supprimer</a></li>
         <li><a class="post-tools" href="#">Edit</a></li>
      </ul>
   </div>
</div>
<?php endwhile; ?>
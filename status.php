<?php

require_once "connexion_db.php";

?>
<section class="post-content wrapper-fil">
   <h2>Bienvenue !</h2>
   <form method="post" action="doadd_post.php">
      <div class="input-create">
         <input class="input-article-create" type="text" name="content" id="pseudo" placeholder="Quoi de neuf ?"/><br />
      </div>
      <div class="element-input-article">
         <button for="pseudo" class="button-article-create" type="input" name="button">Publier</button>
      </div>
   </form>
      <hr>
</section>
<?php
require_once "connexion_db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/button.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
   <title>Hello</title>
</head>
<body>
   <section>
      <?php include('header.php'); ?>

       <section class="post-content wrapper-fil">
           <h2>Bienvenue !</h2>
           <form method="post" action="doadd_post.php">
               <div class="input-create">
                   <input class="input-article-create" type="text" name="content" id="pseudo" placeholder="Quoi de neuf ?"/><br />
               </div>
               <div class="element-input-article">
                   <button name="pseudo" class="button-article-create" type="input" type="submit">Publier</button>
               </div>
           </form>
           <hr>
       </section>

      <?php include('newsfeed.php'); ?>
</body>
</html>  

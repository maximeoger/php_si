<?php

require_once "connexion_db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/button.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
   <title>Hello</title>
</head>
<body>
   <div class="page-full">
      <div class="content-page">
         <h1><span>Logo</span>Sport</h1>
         <form class="form-loginPage-style" method="post" action="login.php">
            <p>
               <input class="style-button" type="text" name="pseudo" id="pseudo" placeholder="Identifiant"/>
               <input class="style-button" type="text" name="pseudo" id="pseudo" placeholder="Password"/>
               <button class="style-button valid-color-button" type="button" name="button">Connexion</button>
            </p>
         </form>
         <a class="link-add-compte" href="add_user.php">Créer un compte</a>
   </div>
</body>
</html>
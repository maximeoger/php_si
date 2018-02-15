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
         <h1><span>my</span>Sport</h1>
         <form class="form-loginPage-style" method="post" action="doadd_user.php">
            <p>
               <input class="style-button" type="text" name="name" id="pseudo" placeholder="Prénom"/>
               <input class="style-button" type="text" name="lastname" id="pseudo" placeholder="Nom"/>
               <input class="style-button" type="date" name="birthdate" id="pseudo" placeholder="YY/MM/DD"/>
               <input class="style-button" type="text" name="fav" id="pseudo" placeholder="Sport Favoris"/>
               <input class="style-button" type="email" name="email" id="pseudo" placeholder="Mail"/>
               <input class="style-button" type="password" name="password" id="pseudo" placeholder="Mot de passe"/>
               <a href="index.php"><button class="style-button valid-color-button" type="submit" name="button">Confirmer</button></a>
            </p>
         </form>
   </div>
</body>
</html>
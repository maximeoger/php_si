<?php

session_start();
//phpinfo();

try { 
    $conn = new PDO('mysql:dbname=si_php_211802;host=127.0.0.1', 'root', 'root'); 
    
    // on charge la base de données via PDO. Cette expression est stockée dans une variable $conn
} catch(PDOException $exception) {
    exit($exception -> getMessage());
    
    // si le chargement échoue, on reçois un message d'erreur

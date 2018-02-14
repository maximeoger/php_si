<?php

//phpinfo();

try {
    $conn = new PDO('mysql:dbname=si_php_211802;host=127.0.0.1', 'root', 'root');
} catch(PDOException $exception) {
    exit($exception -> getMessage());
}
<?php
try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=test' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    
}
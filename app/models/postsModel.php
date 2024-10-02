<?php

namespace App\Models\PostsModel;
Use \PDO;

function findAll(PDO $connexion) {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);            

}
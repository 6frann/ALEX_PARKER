<?php

namespace App\Controllers\PostsController;
 Use \PDO, \App\Models\PostsModel;


 function homeAction(PDO $connexion) {
    
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);

    global $content, $title;
    $title = 'Alex Parker - Blog';
    ob_start();
    include '../app/views/pages/index.php';
    $content = ob_get_clean();
 }
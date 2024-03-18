<?php
require "Database.php";
$config = require ("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = "INSERT INTO posts
    (title, category_id)
    VALUES
    (:title, :category_id);";
}


$title = "Create a post";
require "views/posts-create.view.php";



<?php
require "Database.php";
$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts";
$params = [];

// if($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["matiss"] != "") != "" && $_POST["category_id"] <=3 && strlen($_POST["matiss"]) <= 255) {
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(trim($_POST["title"] == "")) {
        $errors["title"] = "Title cannot be empty";
    }

    if ($_POST["category-id"] < 1 || $_POST["category-id"] > 3) {
        $errors["title"] = "Category-Id invalid";
    }

    if(strlen($_POST["title"]) > 255) {
        $errors["title"] = "Title cannot be longer than 255 characters";
    }

    if(empty($errors)) {
    
        $query = "INSERT INTO posts (title, category_id)
                VALUES (:title, :category_id);";
        $params = [
            ":title" => $_POST["title"], 
            ":category_id" => $_POST["category-id"]
        ];

        $db -> execute($query, $params);
        
        header("Location: /");
        die();
    }
}




$title = "Create a post";
require "views/posts/create.view.php";



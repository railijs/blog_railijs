<?php
require "Database.php";


$config = require ("config.php");

$query = "SELECT * FROM posts";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
$id = $_GET["id"];
$query .= " WHERE id = :id";
$params = [":id" => $id];
}

if (isset($_GET["name"]) && $_GET["name"] != "") {
    $name = ($_GET["name"]);
    $query .= " JOIN categories ON posts.category_id = categories.id WHERE categories.name = :name";
    $params = [":name" => trim($_GET["name"])];
    }

$db = new Database($config);

$posts = $db -> execute($query, $params) 
             -> fetchAll();

$title = "Posts";             

require "views/posts.view.php";
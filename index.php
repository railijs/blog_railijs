<?php
require "functions.php";
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
    $name = $_GET["name"];
    $query .= " JOIN categories ON posts.category_id = categories.id WHERE categories.name = :name";
    $params = [":name" => $_GET["name"]];
    }

$db = new Database($config);
$posts = $db -> execute($query, $params) 
             -> fetchAll();


 echo "<form>";
 echo "<input name='id'/>";
 echo "<button>Submit ID</button>";
 echo "</form>";

 echo "<form>";
 echo "<input name='name'/>";
 echo "<button>Submit category</button>";
 echo "</form>";


 echo "<h1>Posts</h1>";

echo "<ul>";
foreach($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ul>";
?>
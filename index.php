<?php
require "functions.php";
require "Database.php";
$config = require ("config.php");

 

$db = new Database($config);
$posts = $db -> execute("SELECT * FROM posts") 
             -> fetchAll();


echo "<ol>";
foreach($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ol>";
?>
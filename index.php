<?php
require "functions.php";

echo "gang <br>";

$connection_string = "mysql:host=localhost;dbname=blog_railijs;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);

// 1. sagatavo sql izpildei
$query = $pdo -> prepare("SELECT * FROM posts");
// 2. izpildit sql
$query -> execute();
// 3. beidzot dabut rezultatus, visus pie tam
$posts = $query -> fetchAll(PDO::FETCH_ASSOC);

echo "<ol>";
foreach($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";

}
echo "</ol>";
?>
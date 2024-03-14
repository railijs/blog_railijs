<?php 

require "functions.php";
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = ($_SERVER["REQUEST_URI"]);



//ja cilveks dodas uz about route, tad gribam paradit /controllers/about.php
if($url == "/about") {
    require "controllers/about.php";   
} else if ($url == "/") {
    require "controllers/index.php";    
} else if ($url == "/story") {
    require "controllers/story.php";    
} else {
    http_response_code(404);
    require "controllers/404.php";
}
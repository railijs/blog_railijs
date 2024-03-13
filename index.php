<?php 

require "functions.php";
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = ($_SERVER["REQUEST_URI"]);



//ja cilveks dodas uz about route, tad gribam paradit /controllers/about.php
if($url == "/about") {
    require "controllers/about.php";   
}

if($url == "/") {
    require "controllers/index.php";    
}

if($url == "/story") {
    require "controllers/story.php";    
}
<?php
header('Content-Type: application/json; charset=utf-8');

$dir = __DIR__ . '/pictures/galerie/';
$files = glob($dir . '*.{jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP}', GLOB_BRACE);

$images = array_map('basename', $files);

echo json_encode($images, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

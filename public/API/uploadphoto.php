<?php

include("conn.php");

$photo = $_POST['image'];


$bin = base64_decode($photo);

$im = imageCreateFromString($bin);

if (!$im) {
    die('Base64 value is not a valid image');
}

print_r($im);




?>
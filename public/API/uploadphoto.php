<?php

include("conn.php");

$photo = $_POST['photo'];

list($type, $data) = explode(';', $photo);
list(, $data)      = explode(',', $data);

$image_data = base64_decode($data);

print_r($image_data);







?>
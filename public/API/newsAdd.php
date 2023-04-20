<?php

include("conn.php");

$sql = "INSERT into NEWS VALUES(DEFAULT,?,?,?,?,NOW(),'online',0)";

$category= $_POST['category'];
$title= $_POST['title'];
$content= $_POST['content'];
$pic= $_POST['pic'];


$statement = $pdo -> prepare($sql);

$statement->bindValue(1, $category);
$statement->bindValue(2, $title);
$statement->bindValue(3, $content);
$statement->bindValue(4, $pic);

$statement->execute();

echo '成功建立最新消息';

?>
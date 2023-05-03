<?php

include("conn.php");
//如果傳進來的$routerid傳進sql比對後是空值，就會執行update的語法，如果非空值，就會執行insert的語法



$routerid = $_POST['routerid'];

$sql = "UPDATE NEWS SET TITLE = ?, CATEGORY = ?, CONTENT = ?, PIC = ? WHERE ROUTER_ID = $routerid";


$title= $_POST['title'];
$category= $_POST['category'];
$content= $_POST['content'];
$pic= $_POST['pic'];

 //執行
$statement = $pdo -> prepare($sql);

//給值
$statement->bindValue(1, $title);
$statement->bindValue(2, $category);
$statement->bindValue(3, $content);
$statement->bindValue(4, $pic);

$statement->execute();

echo '成功編輯最新消息';

?>
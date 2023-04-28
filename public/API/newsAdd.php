<?php

include("conn.php");
//如果傳進來的$routerid傳進sql比對後是空值，就會執行update的語法，如果非空值，就會執行insert的語法




$sql = "INSERT into NEWS VALUES(DEFAULT,?,?,?,?,?,?,NOW(),1,0)";


$routerid = $_POST['routerid'];
$category= $_POST['category'];
$title= $_POST['title'];
$adminid= $_POST['adminid'];
$content= $_POST['content'];
$pic= $_POST['pic'];


$statement = $pdo -> prepare($sql);
$statement->bindValue(1, $routerid);
$statement->bindValue(2, $category);
$statement->bindValue(3, $title);
$statement->bindValue(4, $adminid);
$statement->bindValue(5, $content);
$statement->bindValue(6, $pic);

$statement->execute();

echo '成功建立最新消息';

?>
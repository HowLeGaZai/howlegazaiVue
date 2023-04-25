<?php
    include("conn.php");


    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $text = $_POST['text'];
    $routerid = $_POST['routerid'];
    $pic = $_POST['pic'];

    //建立SQL語法
    $sql = "UPDATE CHAT SET CATEGORY = ?, TITLE = ?, CONTENT = ?, TEXT = ?, PIC  = ?, CREATE_TIME = NOW() WHERE ROUTER_ID = $routerid";

    

    //執行
    $statement = $pdo -> prepare($sql);

    //給值
  
    $statement->bindValue(1, $category);
    $statement->bindValue(2, $title);
    $statement->bindValue(3, $content);
    $statement->bindValue(4, $text);
    $statement->bindValue(5, $pic);
   
    $statement->execute();

    echo '發布成功';
?>
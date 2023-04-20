<?php
    include("conn.php");

    //建立SQL語法
    $sql = "INSERT into CHAT VALUES(DEFAULT,?,?,?,?,'http://localhost/TGD104G1/src/assets/img/default.jpg',NOW(),?,NULL,NULL,?,DEFAULT)";

    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $text = $_POST['text'];
    // $convert_content = mb_convert_encoding($content, 'UTF-8', 'auto');
    $userid = $_POST['userid'];
    $routerid = $_POST['routerid'];

    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $category);
    $statement->bindValue(2, $title);
    $statement->bindValue(3, $content);
    $statement->bindValue(4, $text);
    $statement->bindValue(5, $userid);
    $statement->bindValue(6, $routerid);
    $statement->execute();

    echo '發布成功';

?>
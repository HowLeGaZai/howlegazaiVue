<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into group1.QA VALUES(?,?,?,?)";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    $title1 = $_POST['title1'];
    $content1 = $_POST['content1'];
    $title2 = $_POST['title2'];
    $content2 = $_POST['content2'];
    $title3 = $_POST['title3'];
    $content3 = $_POST['content3'];
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $title1);
    $statement->bindValue(2, $content1);
    $statement->bindValue(3, $title2);
    $statement->bindValue(4, $content2);
    $statement->bindValue(5, $title3);
    $statement->bindValue(6, $content3);
    
?>
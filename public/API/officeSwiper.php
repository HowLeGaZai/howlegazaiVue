<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into group1.FEATURE VALUES (DEFAULT,?,?,?,?,?,?,?,?,?)";
    
    $title1 = $_POST['title1'];
    $content1 = $_POST['content1'];
    $title2 = $_POST['title2'];
    $content2 = $_POST['content2'];
    $title3 = $_POST['title3'];
    $content3 = $_POST['content3'];
    $pic2 = $_POST['pic2'];
    $pic3 = $_POST['pic3'];
    $pic4 = $_POST['pic4'];
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $title1);
    $statement->bindValue(2, $content1);
    $statement->bindValue(3, $pic2);
    $statement->bindValue(4, $title2);
    $statement->bindValue(5, $content2);
    $statement->bindValue(6, $pic3);
    $statement->bindValue(7, $title3);
    $statement->bindValue(8, $content3);
    $statement->bindValue(9, $pic4);

    $statement->execute();
    
?>
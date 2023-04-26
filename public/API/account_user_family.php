<?php

    include("conn.php");


    $ID = $_POST['ID'];
    //建立SQL語法
    // $sql = "SELECT * FROM SPACE";
    $sql = "SELECT FULL_NAME, ACCOUNT ,EMAIL FROM USER 
            WHERE FAMILY_ID = (SELECT FAMILY_ID FROM USER WHERE ID = ?) 
            AND ID != ? AND USER_STATUS = 1";

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1 , $ID); 
    $statement->bindValue(2 , $ID); 
    $statement->execute();

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    echo json_encode($data);




?>
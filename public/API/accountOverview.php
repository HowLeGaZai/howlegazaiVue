<?php


    include("conn.php");


    //建立SQL語法
    $sql = "SELECT U.ID, FULL_NAME, ACCOUNT, L.NAME , T.NAME  FROM USER U 
    JOIN T_USER_LEVEL L
        ON U.USER_LEVEL = L.ID 
    LEFT JOIN T_USER_TAG T
        ON U.USER_TAG = T.ID
        WHERE U.STATUS > 0
    ORDER BY U.ID ";

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    echo json_encode($data)


?>
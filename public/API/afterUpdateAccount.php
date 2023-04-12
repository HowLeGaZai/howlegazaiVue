<?php

    //先引入這支php
    include("conn.php");


    //建立SQL語法
    $sql = "SELECT U.UPDATE_DATE, U.ID, U.FULL_NAME,U.ACCOUNT, L.NAME ,CREATEDATE  FROM USER U 
            JOIN T_USER_LEVEL L
            ON U.USER_LEVEL = L.ID 
            WHERE U.STATUS = 0 ";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    // echo $index;

        //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        $statement = $pdo->query($sql);

        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();

        //echo json_encode($data)
        echo json_encode($data);
        
    // print_r($statement);
?>
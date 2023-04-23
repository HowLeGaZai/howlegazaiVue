<?php

    include("conn.php");

    // Get user ID from request
    $user_id = $_POST['user_id'];

    $sql = "SELECT *
            FROM ACTIVITY_ORDER c
            JOIN ATTEND_DETAIL d ON c.ID = d.ID
            JOIN ACTIVITY e ON c.ACTIVITY_ID = e.ID
            WHERE USER_ID = $user_id
            ORDER BY START_DATE ASC;";

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    // 將陣列轉換為物件
    $object = (object) $data[0];

    //echo json_encode($data)
    // echo json_encode([
    //     "START_DATE" => $object->START_DATE,
    //     "TITLE" => $object->TITLE,
    //     "ID" => $object->ID,
    //     "PAYMENT" => $object->PAYMENT,
    //     "START_TIME" => $object->START_TIME,
    //     "END_DATE" => $object->END_DATE,
    //     "END_TIME" => $object->END_TIME,
    //     "LOCATION" => $object->LOCATION,
    //     "ATTEND_NAME" => $object->ATTEND_NAME,
    //     "ATTEND_PHONE" => $object->ATTEND_PHONE,
    //     "ATTEND_MAIL" => $object->ATTEND_MAIL,

    // ]);
    
    echo json_encode($data);

?>
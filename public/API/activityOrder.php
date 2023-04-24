<?php

    include("conn.php");

        // Get user ID from request
        $ACTIVITY_ID = $_POST['activity_id'];

        $sql = "SELECT *
                FROM ATTEND_DETAIL c
                JOIN ACTIVITY_ORDER d ON d.ID = c.ID
                WHERE d.ACTIVITY_ID = $ACTIVITY_ID
                ORDER BY d.CREATE_TIME ASC;";

        //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        $statement = $pdo->query($sql);

        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();

        // 將陣列轉換為物件
        $object = (object) $data[0];

        echo json_encode($data);

?>
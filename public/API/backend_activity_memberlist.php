<?php

    include("conn.php");

    $ACTIVITY_ID = $_POST['paramsID'];

    $sql = "SELECT c.* , d.ACTIVITY_ID, e.TITLE,d.CREATE_TIME
            FROM ATTEND_DETAIL c
            JOIN ACTIVITY_ORDER d ON c.ID = d.ID
            JOIN ACTIVITY e ON d.ACTIVITY_ID = e.ID
            WHERE d.ACTIVITY_ID = $ACTIVITY_ID
            ORDER BY d.CREATE_TIME DESC;";

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    //echo json_encode($data)
    // echo json_encode($data);

    if ($data === false) {
        // 沒資料
        echo "nodata";
    } else {
        // 有資料
        // echo "goodjob";
        echo json_encode($data);
    }
?>
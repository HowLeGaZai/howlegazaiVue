<?php

       include("conn.php");

       //---------------------------------------------------

        $sql = "SELECT a.*, COALESCE(b.TOTAL_ATTEND_NUM, 0) AS TOTAL_ATTEND_NUM
                FROM ACTIVITY a
                LEFT JOIN (
                SELECT ACTIVITY_ID, SUM(ATTEND_NUM) AS TOTAL_ATTEND_NUM
                FROM ACTIVITY_ORDER
                GROUP BY ACTIVITY_ID
                ) b ON a.ID = b.ACTIVITY_ID";

        //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        $statement = $pdo->query($sql);

        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();

        //echo json_encode($data)
        echo json_encode($data);
?>
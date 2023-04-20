<?php

include("conn.php");


//建立SQL語法
$sql = "SELECT O.APPLY_NAME, O.APPLY_PHONE,O.REV_DATE, CONCAT(O.REV_START_TIME,'-', O.REV_END_TIME) AS START_CLOSE_TIME ,  S.NAME , O.PURPOSE 
        FROM SPACE_ORDER O 
        JOIN SPACE S ON O.SPACE_ID = S.ID
        WHERE O.STATUS = 1;";

//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

echo json_encode($data);









?>
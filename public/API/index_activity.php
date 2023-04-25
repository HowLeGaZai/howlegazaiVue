<?php

include("conn.php");

//---------------------------------------------------

$sql = "SELECT BANNER, PRICE, START_DATE, TITLE, ID
        FROM ACTIVITY
        ORDER BY START_DATE DESC
        LIMIT 8;";

 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

 //echo json_encode($data)
 echo json_encode($data);

?>
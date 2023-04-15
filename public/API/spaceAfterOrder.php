<?php

include("conn.php");


//建立SQL語法
$sql = "SELECT REV_DATE, CONCAT(REV_START_TIME,'-', REV_END_TIME) FROM SPACE_ORDER";

//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

echo json_encode($data);



?>
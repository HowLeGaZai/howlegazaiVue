<?php

include("conn.php");

$sql = "SELECT S.ID, S.NAME, O.COUNT FROM SPACE S
lEFT JOIN (SELECT SPACE_ID, COUNT(*) as COUNT FROM SPACE_ORDER GROUP BY SPACE_ID) O ON S.ID = O.SPACE_ID;";

//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

echo json_encode($data);






?>
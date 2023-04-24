<?php

// 建立資料庫連線
include("conn.php");

// Get user ID from request


// 撈取正在使用中的family數量

$sql = "SELECT * FROM FAMILY WHERE STATUS=1";

// 執行並查詢，會回傳查詢結果的物件，必須使用 fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

// 抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();


// // 輸出成 JSON 格式
echo json_encode($data);
?>
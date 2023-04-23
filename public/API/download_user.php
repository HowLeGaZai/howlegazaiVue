<?php

include("conn.php");

// 資料庫查詢
$sql = "SELECT U.ID, FULL_NAME, ACCOUNT, PHONE, EMAIL, ADDRESS, L.NAME AS LEVEL, T.NAME  FROM USER U 
JOIN T_USER_LEVEL L
    ON U.USER_LEVEL = L.ID 
LEFT JOIN T_USER_TAG T
    ON U.USER_TAG = T.ID
    WHERE U.USER_STATUS > 0
    AND U.STATUS > 0
ORDER BY U.ID";

$statement = $pdo->query($sql);

// 建立CSV檔案
$filename = "用戶資料.csv";
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

// 開啟檔案
$file = fopen('php://output', 'w');

// 寫入CSV標題行
fputcsv($file, array('id', 'name', 'account', 'phone', 'email', 'address', 'level', 'tag'));

// 寫入CSV資料
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
  fputcsv($file, $row);
}

// 關閉檔案
fclose($file);

// // 關閉資料庫連線
// $conn->close();

?>
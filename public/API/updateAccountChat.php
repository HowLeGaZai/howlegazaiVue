<?php

// 建立資料庫連線
include("conn.php");

// Get user ID from request
$ID = $_POST['ID'];
$STATUS = $_POST['STATUS'];

$sql = "UPDATE CHAT SET STATUS = ? WHERE ID = ?";

$statement = $pdo->prepare($sql);
$statement->bindValue(1, $STATUS);
$statement->bindValue(2, $ID);
$statement->execute();

// 建立回應資料
$response = array(
    'status' => 'success',
    'message' => '下架成功'
);

// 設定回應為 JSON 格式
header('Content-Type: application/json');

// 輸出 JSON 格式的回應
echo json_encode($response);
?>
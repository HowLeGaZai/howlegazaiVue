<?php

// 建立資料庫連線
include("conn.php");

// Get user ID from request
$user_id = $_POST['user_id'];
$NICKNAME = $_POST['NICKNAME'];
$PHONE = $_POST['PHONE'];
$EMAIL = $_POST['EMAIL'];
$PORTRAIT = $_POST['PORTRAIT'];

// Update user data
$userData = array();

if (isset($NICKNAME)) {
    $userData['NICKNAME'] = $NICKNAME;
}

if (isset($PHONE)) {
    $userData['PHONE'] = $PHONE;
}

if (isset($EMAIL)) {
    $userData['EMAIL'] = $EMAIL;
}

if (isset($PORTRAIT)) {
    $userData['PORTRAIT'] = $PORTRAIT;
}
  
// Update user data in database
$sql = "UPDATE USER SET NICKNAME = ?, PHONE = ?, EMAIL = ?, PORTRAIT = ? WHERE ID = ?";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $userData['NICKNAME'] ?? null);
$statement->bindValue(2, $userData['PHONE'] ?? null);
$statement->bindValue(3, $userData['EMAIL'] ?? null);
$statement->bindValue(4, $userData['PORTRAIT'] ?? null);
$statement->bindValue(5, $user_id);
$statement->execute();

// 建立回應資料
$response = array(
    'status' => 'success',
    'message' => '儲存成功'
);

// 設定回應為 JSON 格式
header('Content-Type: application/json');

// 輸出 JSON 格式的回應
echo json_encode($response);
?>
<?php

// 建立資料庫連線
include("conn.php");

// Get user ID from request
$user_id = $_POST['user_id'];
$GENDER = $_POST['GENDER'];
$NICKNAME = $_POST['NICKNAME'];
$ID_NUMBER = $_POST['ID_NUMBER'];
$BIRTHDATE = $_POST['BIRTHDATE'];
$PHONE = $_POST['PHONE'];
$EMAIL = $_POST['EMAIL'];
$PORTRAIT = $_POST['PORTRAIT'];

// Update user data
$userData = array();

if (!is_null($GENDER)) {
    $userData['GENDER'] = $GENDER;
}

if (!is_null($ID_NUMBER)) {
    $userData['ID_NUMBER'] = $ID_NUMBER;
}

if (!is_null($BIRTHDATE)) {
    $userData['BIRTHDATE'] = $BIRTHDATE;
}

if (!is_null($NICKNAME)) {
    $userData['NICKNAME'] = $NICKNAME;
}

if (!is_null($PHONE)) {
    $userData['PHONE'] = $PHONE;
}

if (!is_null($EMAIL)) {
    $userData['EMAIL'] = $EMAIL;
}

if (!is_null($PORTRAIT)) {
    $userData['PORTRAIT'] = $PORTRAIT;
}
  
// Update user data in database
$sql = "UPDATE USER SET GENDER = ?, ID_NUMBER = ?, BIRTHDATE = ?, NICKNAME = ?, PHONE = ?, EMAIL = ?, PORTRAIT = ? WHERE ID = ?";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $userData['GENDER'] ?? null);
$statement->bindValue(2, $userData['ID_NUMBER'] ?? null);
$statement->bindValue(3, $userData['BIRTHDATE'] ?? null);
$statement->bindValue(4, $userData['NICKNAME'] ?? null);
$statement->bindValue(5, $userData['PHONE'] ?? null);
$statement->bindValue(6, $userData['EMAIL'] ?? null);
$statement->bindValue(7, $userData['PORTRAIT'] ?? null);
$statement->bindValue(8, $user_id);
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
<?php

// 建立資料庫連線
include("conn.php");

// Get user ID from request
$user_id = $_POST['user_id'];

// 撈取符合 cookie ID 的使用者資料
$sql = "SELECT ID,ADDRESS,FIRST_NAME,LAST_NAME,ACCOUNT,FULL_NAME,NICKNAME,GENDER,ID_NUMBER,BIRTHDATE,EMAIL,PHONE,PORTRAIT,UPDATER FROM USER WHERE ID = $user_id";

// 執行並查詢，會回傳查詢結果的物件，必須使用 fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

// 抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

if (count($data) == 0) {
    $data = null;
}

// 輸出成 JSON 格式
echo json_encode($data);
?>
<?php

include("conn.php");

//---------------------------------------------------

// 住址對比已存帳戶USER_STATUS_0
$sql = "SELECT * FROM USER WHERE ACCOUNT = ?";

$address = $_POST['address'];

 $statement = $pdo->prepare($sql);
 $statement->bindValue(1, $address);
 $statement->execute();
 $data = $statement->fetchAll();

 // 檢查查詢結果
 if(COUNT($data) > 0){
     // 帳號重複
     echo "duplicate";
 } else {
     // 帳號未重複
     echo "not_duplicate";
 }
 


?>
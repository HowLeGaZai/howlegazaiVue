<?php

include("conn.php");

//---------------------------------------------------

$sql = "SELECT * FROM USER WHERE ACCOUNT = ?";

$account = $_POST['account'];

 $statement = $pdo->prepare($sql);
 $statement->bindValue(1, $account);
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
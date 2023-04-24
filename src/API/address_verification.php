<?php

include("conn.php");

$address = $_POST['address'];
// 住址對比已存帳戶USER_STATUS_0
//---------------------------------------------------
$sql = "SELECT ADDRESS FROM USER WHERE ADDRESS LIKE '%$address%' ";

 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);
//  $statement->bindValue(1, $address);
//  $statement->execute();
 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

 //檢查查詢

if(COUNT($data)>0){
  echo "duplicate_address";
}else{
  echo "useable_address";
}








?>
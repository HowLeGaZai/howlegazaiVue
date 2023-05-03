<?php

include("conn.php");

//---------------------------------------------------

// 住址對比已存帳戶USER_STATUS_0
$sql = "SELECT * FROM NEWS WHERE ROUTER_ID = ?";

$routerid = $_POST['routerid'];

 $statement = $pdo->prepare($sql);
 $statement->bindValue(1, $routerid);
 $statement->execute();
 $data = $statement->fetchAll();
 
 // 檢查查詢結果
 if(COUNT($data) > 0){
     // routerid重複
     //  echo $data;
     // $data= "duplicate";
    echo json_encode($data);
    // echo "duplicate";
 } else {
     // routerid未重複
    $data= "not_duplicate";
    echo json_encode($data);

    //  echo "not_duplicate";
 }
 


?>


<?php


    include("conn.php");


    //建立SQL語法
    $sql = "UPDATE USER SET USER_STATUS = 0 , UPDATE_DATE = CURDATE() WHERE ID = ?";
    
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);

    $index = $data["index"];

    // echo $index;

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $index);
    $statement->execute();

    // print_r($statement);
?>
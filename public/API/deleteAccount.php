<?php


    include("conn.php");


    $account = $_POST['account'];
    //建立SQL語法
    $sql = "UPDATE USER SET USER_STATUS = 0  WHERE ACCOUNT = ?";
    

    // echo $index;

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $account);
    $statement->execute();

    // print_r($statement);
?>
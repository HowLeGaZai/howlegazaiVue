<?php

    include("conn.php");


    //建立SQL語法
    $sql = "UPDATE USER SET STATUS = 1 , FAMILY_ID = ? , UPDATER = ? WHERE ID = ?";

    $ID = $_POST["ID"];

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $ID);
    $statement->bindValue(2, $ID);
    $statement->bindValue(3, $ID);
    $statement->execute();

?>
<?php

    include("conn.php");


    //建立SQL語法
    $sql = "UPDATE USER SET STATUS = '-1' WHERE ID = ?";

    $ID = $_POST["ID"];

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $ID);
    $statement->execute();

?>
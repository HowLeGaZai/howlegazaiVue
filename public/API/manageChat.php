<?php


    include("conn.php");


    //建立SQL語法

    $sql = "UPDATE CHAT SET STATUS = ? WHERE ID = ?";
    
    $status = $_POST["onoff"];
    $chatID = $_POST["chatid"];

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $status);
    $statement->bindValue(2, $chatID);
    $statement->execute();
    
    echo "done"

?>
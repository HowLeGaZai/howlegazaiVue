<?php

    include("conn.php");


    //建立SQL語法
    $sql = "UPDATE USER SET PASSWORD = ? WHERE ID = ?";

    $newpwd = $_POST["newpwd"];
    $userid = $_POST["userid"];

    $newpwd = password_hash($newpwd, PASSWORD_BCRYPT);

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1, $newpwd);
    $statement->bindValue(2, $userid);
    $statement->execute();

?>
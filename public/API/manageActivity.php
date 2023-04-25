<?php


    include("conn.php");


    //建立SQL語法
    $active = $_POST['active'];

    $sql = "UPDATE ACTIVITY SET `$active` = ? WHERE ID = ?";

    
    $status = $_POST['status'];
    $activityid = $_POST['activityid'];

    

    // 抓出全部且依照順序封裝成一個二維陣列
    $statement = $pdo -> prepare($sql);
    // $statement->bindValue(1, $active);
    $statement->bindValue(1, $status);
    $statement->bindValue(2, $activityid);

    $statement->execute();
    
    echo "done";

?>
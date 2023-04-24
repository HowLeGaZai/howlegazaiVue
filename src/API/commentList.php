<?php

    include("conn.php");

    $chatID = $_POST['chatID'];


    $sql = "SELECT C.CHAT_ID,U.PORTRAIT, C.USER_ID, U.NICKNAME, C.CREATE_TIME, C.CONTENT  
            FROM COMMENT C 
            JOIN USER U 
            ON C.USER_ID = U.ID 
            WHERE C.CHAT_ID = $chatID
            order by C.CREATE_TIME desc";

    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    //echo json_encode($data)
    echo json_encode($data);


?>
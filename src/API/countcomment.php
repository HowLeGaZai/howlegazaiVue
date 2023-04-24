<?php

    include("conn.php");

    $chatID = $_POST['chatID'];

    $sql = "SELECT COUNT(*) FROM COMMENT WHERE CHAT_ID = $chatID ";

    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    //echo json_encode($data)
    echo json_encode($data);


?>
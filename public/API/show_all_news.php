<?php

include("conn.php");
 // searchNews為最新消息的搜尋input內容

    //建立SQL語法
    // 查找符合的新聞標題(未下架的才會出現) 
   
    $sql = "SELECT * FROM NEWS WHERE STATUS=1 ORDER BY CREATE_TIME desc";
    
    // echo $sql;
    // $statement = $pdo->prepare($sql);

    //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
    $statement = $pdo->query($sql);

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    echo json_encode($data);

?>


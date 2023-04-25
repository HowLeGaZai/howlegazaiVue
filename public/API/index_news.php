<?php

include("conn.php");

//---------------------------------------------------


$sql = "SELECT CATEGORY, CREATE_TIME, TITLE, TOP, ROUTER_ID 
        FROM NEWS
        WHERE STATUS = 1 
        ORDER BY TOP DESC, CREATE_TIME DESC LIMIT 5;";
         
 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

 //echo json_encode($data)
 echo json_encode($data);

?>
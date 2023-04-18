<?php

include("conn.php");

//---------------------------------------------------

 $sql = "SELECT c.ID, c.CATEGORY, c.TITLE, c.CONTENT, c.PIC, c.CREATE_TIME, u.PORTRAIT, u.NICKNAME
        FROM CHAT c
        JOIN USER u
        ON c.USER_ID = u.ID
        where c.STATUS = 1
        order by c.CREATE_TIME desc";

 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

 //echo json_encode($data)
 echo json_encode($data);

?>
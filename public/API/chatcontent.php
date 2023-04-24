<?php

include("conn.php");

//---------------------------------------------------
$chatid = $_POST['routeid'];

 $sql = "SELECT c.ID, c.CATEGORY, c.TITLE, c.CONTENT, c.TEXT, c.PIC, c.ROUTER_ID, c.CREATE_TIME, u.PORTRAIT, u.NICKNAME, u.ID
        FROM CHAT c
        JOIN USER u
        ON c.USER_ID = u.ID
        where c.ID = $chatid ";

 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

//  if (count($data) > 0) {
// }
echo json_encode($data);


?>
<?php

include("conn.php");

// Get user ID from request
$user_id = $_POST['user_id'];

$sql = "SELECT *
        FROM SPACE_ORDER c
        JOIN SPACE d ON c.SPACE_ID = d.ID
        WHERE USER_ID = $user_id
        ORDER BY c.STATUS DESC, c.REV_DATE ASC";


 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

 //echo json_encode($data)
 echo json_encode($data);

?>
<?php

include("conn.php");

//---------------------------------------------------
$newsid = $_POST['routeid'];


$sql ="SELECT c.ID, c.CATEGORY, c.TITLE, c.CONTENT, c.PIC, c.CREATE_TIME, c.ROUTER_ID, u.PORTRAIT, u.ELECTIONYEAR, u.FULLNAME
       FROM NEWS c
       JOIN CONTACT_VILLAGE u
       ON c.ADMIN_ID = u.ELECTIONYEAR
       WHERE c.ROUTER_ID LIKE '$newsid'";

 //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
 $statement = $pdo->query($sql);

 //抓出全部且依照順序封裝成一個二維陣列
 $data = $statement->fetchAll();

echo json_encode($data);


?>
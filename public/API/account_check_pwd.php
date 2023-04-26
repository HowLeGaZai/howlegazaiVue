<?php

include("conn.php");

//---------------------------------------------------

// 密碼對比 user password
$ID = $_POST['userId'];
$OLDPASSWORD = $_POST['OLDPASSWORD'];


// echo $ID;


$sql = "SELECT ID, PASSWORD
        FROM USER 
        WHERE ID = $ID";



//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料

$statement = $pdo->prepare($sql);
// $statement->bindValue(1 , $ID);
// $statement->bindValue(2 , $OLDPASSWORD);
$statement->execute();

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

// if ($data && password_verify($OLDPASSWORD, $data['PASSWORD'])) {

if ($data[0]['PASSWORD'] !== $OLDPASSWORD) {
    // 密碼不一致
    echo "notsame";
} else {
    // 密碼一致
    echo "same";
}

?>
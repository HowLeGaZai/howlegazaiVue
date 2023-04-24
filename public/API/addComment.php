<?php

include("conn.php");

$CHAT_ID = $_POST['CHAT_ID'];
$USER_ID = $_POST['USER_ID'];
// $CREATE_TIME = $_POST['CREATE_TIME'];
$CONTENT = $_POST['CONTENT'];



$sql = "INSERT INTO COMMENT VALUES(DEFAULT,?,?,NOW(),?);";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 ,$CHAT_ID);
    $statement->bindValue(2 ,$USER_ID);
    // $statement->bindValue(3 ,$CREATE_TIME);
    $statement->bindValue(3 ,$CONTENT);
    $statement->execute();


?>
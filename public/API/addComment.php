<?php

include("conn.php");

$USER_ID = $_POST['USER_ID'];
$CREATE_TIME = $_POST['CREATE_TIME'];
$CONTENT = $_POST['CONTENT'];

$sql = "INSERT INTO COMMENT VALUES(DEFAULT,1,?,?,?);";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 ,$USER_ID);
    $statement->bindValue(2 ,$CREATE_TIME);
    $statement->bindValue(3 ,$CONTENT);
    $statement->execute();


?>
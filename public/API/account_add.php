<?php

include("conn.php");

//建立SQL語法
$sql = "INSERT into USER VALUES(DEFAULT,?,?,?,'',NULL,?,?,NULL,?,?,?,2,DEFAULT,NULL,NULL,1,NOW(),NULL, ?,NULL,DEFAULT,DEFAULT,?)";

$FIRST_NAME = $_POST['FIRST_NAME'];
$LAST_NAME = $_POST['LAST_NAME'];
$FULL_NAME = $FIRST_NAME.$LAST_NAME;
$ACCOUNT = $_POST['ACCOUNT'];
$PASSWORD = $_POST['PASSWORD'];
$EMAIL = $_POST['EMAIL'];
$ADDRESS = $_POST['ADDRESS'];
$FAMILY_ID = $_POST['FAMILY_ID'];
$NICKNAME = $FULL_NAME;

$PASSWORD = password_hash($PASSWORD, PASSWORD_BCRYPT);

//執行
$statement = $pdo -> prepare($sql);

//給值
$statement->bindValue(1, $FIRST_NAME);
$statement->bindValue(2, $LAST_NAME);
$statement->bindValue(3, $FULL_NAME);
$statement->bindValue(4, $ACCOUNT);
$statement->bindValue(5, $PASSWORD);
$statement->bindValue(6, $EMAIL);
$statement->bindValue(7, $ADDRESS);
$statement->bindValue(8, $NICKNAME);
$statement->bindValue(9, $FAMILY_ID);
$statement->bindValue(10, $FAMILY_ID);





$statement->execute();

echo '加入成功';
?>
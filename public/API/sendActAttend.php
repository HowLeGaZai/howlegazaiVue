<?php

include("conn.php");

$ATTEND_NAME = $_POST['ATTEND_NAME'];
$ATTEND_GENDER = $_POST['ATTEND_GENDER'];
$ATTEND_MAIL = $_POST['ATTEND_MAIL'];
$ATTEND_PHONE = $_POST['ATTEND_PHONE'];

// echo "received2";

$sql = "INSERT INTO ATTEND_DETAIL VALUES(DEFAULT,?,?,?,?)";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 ,$ATTEND_NAME);
    $statement->bindValue(2 ,$ATTEND_GENDER);
    $statement->bindValue(3 ,$ATTEND_MAIL);
    $statement->bindValue(4 ,$ATTEND_PHONE);
    $statement->execute();

?>

<?php

include("conn.php");

$USER_ID = $_POST['USER_ID'];
$ATTEND_NUM = $_POST['attendeeNum'];
$COST = $_POST['cost'];
$ACT_ID = $_POST['ACTIVITY_ID'];

// echo "received";


$sql = "INSERT INTO ACTIVITY_ORDER VALUES(DEFAULT,NOW(),?,?,?,?)";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 ,$ACT_ID);
    $statement->bindValue(2 ,$COST);
    $statement->bindValue(3 ,$ATTEND_NUM);
    $statement->bindValue(4 ,$USER_ID);
    $statement->execute();

?>
<?php

include("conn.php");


//建立SQL語法
$sql = "INSERT into SPACE_ORDER VALUES(DEFAULT,?,'0',?,?,?,?,?,?,?,?,?,NULL)";

// $request_body = file_get_contents('php://input');
// $data = json_decode($request_body, true);,

// $index = $data["index"];

$USER_ID = $_POST['USER_ID'];
$PURPOSE = $_POST['PURPOSE'];
$date = $_POST['date'];
$start = $_POST['start'];
$end = $_POST['end'];
$APPLY_NAME = $_POST['APPLY_NAME'];
$APPLY_MAIL = $_POST['APPLY_MAIL'];
$APPLY_TITLE = $_POST['APPLY_TITLE'];
$APPLY_PHONE = $_POST['APPLY_PHONE'];
$SPACE_ID = $_POST['SPACE_ID'];


// echo $city;
// echo $district;
// echo $village;
//執行
$statement = $pdo -> prepare($sql);

//給值
$statement->bindValue(1, $USER_ID);
$statement->bindValue(2, $PURPOSE);
$statement->bindValue(3, $date);
$statement->bindValue(4, $start);
$statement->bindValue(5, $end);
$statement->bindValue(6, $APPLY_NAME);
$statement->bindValue(7, $APPLY_MAIL);
$statement->bindValue(8, $APPLY_TITLE);
$statement->bindValue(9, $APPLY_PHONE);
$statement->bindValue(10, $SPACE_ID);
$statement->execute();









?>
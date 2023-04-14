<?php

include("conn.php");


//建立SQL語法
$sql = "INSERT into VILLAGE VALUES(?,?,NOW())";

// $request_body = file_get_contents('php://input');
// $data = json_decode($request_body, true);

// $index = $data["index"];

$population = $_POST['population'];
$home_num = $_POST['home_num'];

//執行
$statement = $pdo -> prepare($sql);

//給值
$statement->bindValue(1, $population);
$statement->bindValue(2, $home_num);
$statement->execute();






?>
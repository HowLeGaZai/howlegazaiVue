<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into WEB_INFO VALUES(DEFAULT,?,?,?)";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    $city = $_POST['city'];
    $district = $_POST['district'];
    $village = $_POST['village'];


    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $city);
    $statement->bindValue(2, $district);
    $statement->bindValue(3, $village);
    $statement->execute();

    
?>
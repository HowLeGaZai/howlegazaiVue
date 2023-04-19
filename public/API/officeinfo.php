<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into group1.CONTACT_VILLAGE VALUES(DEFAULT,?,?,?,?,?,?,?,?,?)";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $electionyear = $_POST['electionyear'];
    $degree = $_POST['degree'];
    $mainphone = $_POST['mainphone'];
    $secphone = $_POST['secphone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pic1 = $_POST['pic1'];
 
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $fullname);
    $statement->bindValue(2, $gender);
    $statement->bindValue(3, $electionyear);
    $statement->bindValue(4, $degree);
    $statement->bindValue(5, $mainphone);
    $statement->bindValue(6, $secphone);
    $statement->bindValue(7, $email);
    $statement->bindValue(8, $address);
    $statement->bindValue(9, $pic1);

    $statement->execute();
    
?>
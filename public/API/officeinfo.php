<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into group1.CONTACT_VILLAGE VALUES(?,?,?,?)";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    $electionyear = $_POST['electionyear'];
    $degree = $_POST['degree'];
    $mainphone = $_POST['mainphone'];
    $secphone = $_POST['secphone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
 
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $firstname + $lastname);
    $statement->bindValue(2, $male , $female);
    $statement->bindValue(3, $male);
    $statement->bindValue(4, $female);
    $statement->bindValue(5, $electionyear);
    $statement->bindValue(6, $degree);
    $statement->bindValue(7, $mainphone);
    $statement->bindValue(8, $secphone);
    $statement->bindValue(9, $email);
    $statement->bindValue(10, $address);


    
?>
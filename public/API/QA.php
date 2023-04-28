<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into QA VALUES(DEFAULT,?,?,?,?,?,?,?,?,?,?)";
    
    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);

    // $index = $data["index"];

    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $question1);
    $statement->bindValue(2, $answer1);
    $statement->bindValue(3, $question2);
    $statement->bindValue(4, $answer2);
    $statement->bindValue(5, $question3);
    $statement->bindValue(6, $answer3);
    $statement->bindValue(7, $question4);
    $statement->bindValue(8, $answer4);
    $statement->bindValue(9, $question5);
    $statement->bindValue(10, $answer5);
    
    $statement->execute();
?>
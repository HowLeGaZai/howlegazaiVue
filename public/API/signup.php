<?php
    include("conn.php");

    //建立SQL語法
    $sql = "INSERT into USER VALUES(DEFAULT,?,?,?,'/src/assets/img/user_pic.png',?,?,?,?,?,?,?,1,DEFAULT,?,?,DEFAULT,NOW(),?, DEFAULT,?,DEFAULT,DEFAULT,DEFAULT)";

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fullname = $_POST['fullname'];
    $nickName = $_POST['nickName'];
    $idNum = $_POST['idNum'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $idFront = $_POST['idFront'];
    $idBack = $_POST['idBack'];
    $birth = $_POST['birthdate'];

    // $password = password_hash($password, PASSWORD_BCRYPT);
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $firstName);
    $statement->bindValue(2, $lastName);
    $statement->bindValue(3, $fullname);
    $statement->bindValue(4, $gender);
    $statement->bindValue(5, $account);
    $statement->bindValue(6, $password);
    $statement->bindValue(7, $phoneNum);
    $statement->bindValue(8, $email);
    $statement->bindValue(9, $address);
    $statement->bindValue(10, $nickName);
    $statement->bindValue(11, $idFront);
    $statement->bindValue(12, $idBack);
    $statement->bindValue(13, $birth);
    $statement->bindValue(14, $idNum);
    $statement->execute();

    echo '加入成功';

?>
<?php
    include("conn.php");
    
    $account = $_POST['account'];
    $pwd = $_POST['password'];

    // 建立 SQL
    $sql = "SELECT * FROM USER WHERE STATUS = 1 and ACCOUNT = ? and PASSWORD = ?";

    // 給值
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $account);
    $statement->bindValue(2, $pwd);
    $statement->execute();
    $data = $statement->fetchAll();

    if(COUNT($data) > 0){
        echo json_encode($data);
    }else{
        echo "N";
    }


    // include("conn.php");
    // $account = $_POST['account'];
    // $pwd = $_POST['password'];

    // $sql = "SELECT * FROM USER WHERE STATUS = 1 and ACCOUNT = ? ";

    // $statement = $pdo->prepare($sql);
    // $statement->bindValue(1, $account);
    // $statement->execute();
    // $data = $statement->fetchAll();

    // if(COUNT($data) > 0 && password_verify($pwd, $data[0]['PASSWORD'])){
    //     echo json_encode($data);
    // }else{
    //     echo "N";
    // }


?>
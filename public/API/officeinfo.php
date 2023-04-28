<?php


    include("conn.php");


    //建立SQL語法
    $sql = "INSERT into CONTACT_VILLAGE VALUES(DEFAULT,?,?,?,?,?,?,?,?,?,?,?,?)";
    

    // $index = $data["index"];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $electionyear = $_POST['electionyear'];
    $degree = $_POST['degree'];
    $mainphone = $_POST['mainphone'];
    $secphone = $_POST['secphone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pic1 = $_POST['pic1'];
    $autobiography = $_POST['autobiography'];
 
    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $lastname);
    $statement->bindValue(2, $firstname);
    $statement->bindValue(3, $fullname);
    $statement->bindValue(4, $gender);
    $statement->bindValue(5, $electionyear);
    $statement->bindValue(6, $degree);
    $statement->bindValue(7, $mainphone);
    $statement->bindValue(8, $secphone);
    $statement->bindValue(9, $email);
    $statement->bindValue(10, $address);
    $statement->bindValue(11, $pic1);
    $statement->bindValue(12, $autobiography);
    

    $statement->execute();
    
?>
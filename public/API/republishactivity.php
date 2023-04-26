<?php
    include("conn.php");

    $routerid = $_POST['routerid'];
    $TITLE = $_POST['TITLE'];
    $BANNER = $_POST['BANNER'];
    $START_DATE = $_POST['START_DATE'];
    $START_TIME = $_POST['START_TIME'];
    $END_DATE = $_POST['END_DATE'];
    $END_TIME = $_POST['END_TIME'];
    $CATEGORY = $_POST['CATEGORY'];
    $LOCATION = $_POST['LOCATION'];
    $MAX_PPL = $_POST['MAX_PPL'];
    $PRICE = $_POST['PRICE'];
    $CONTENT = $_POST['CONTENT'];
    $REG_START = $_POST['REG_START'];
    $REG_END = $_POST['REG_END'];


    //建立SQL語法
    $sql = "UPDATE ACTIVITY SET TITLE = ?, BANNER = ?, START_DATE = ?, START_TIME = ?, END_DATE  = ?,END_TIME  = ?, CATEGORY  = ?,LOCATION  = ?,MAX_PPL = ?,PRICE = ?,CONTENT = ?, REG_START = ?,REG_END = ?  WHERE ROUTERID = $routerid";

    // $sql = "INSERT into ACTIVITY VALUES(DEFAULT,?,?,?,?,?,?,?,?,?,?,?,NULL,?,?,1,DEFAULT,?)";

    //執行
    $statement = $pdo -> prepare($sql);

    //給值
  
    $statement->bindValue(1, $TITLE);
    $statement->bindValue(2, $BANNER);
    $statement->bindValue(3, $START_DATE);
    $statement->bindValue(4, $START_TIME);
    $statement->bindValue(5, $END_DATE);
    $statement->bindValue(6, $END_TIME);
    $statement->bindValue(7, $CATEGORY);
    $statement->bindValue(8, $LOCATION);
    $statement->bindValue(9, $MAX_PPL);
    $statement->bindValue(10, $PRICE);
    $statement->bindValue(11, $CONTENT);
    $statement->bindValue(12, $REG_START);
    $statement->bindValue(13, $REG_END);
   
    $statement->execute();

    echo '更新';
?>
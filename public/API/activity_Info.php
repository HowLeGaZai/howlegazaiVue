<?php

       include("conn.php");

       //---------------------------------------------------

       $activityID = $_POST["ID"];

       //建立SQL語法
       // 查找符合的新聞標題 
       
       $sql = "SELECT * FROM member where Account = :account and PWD = :pwd";

       $statement = $pdo->prepare($sql);
       $statement->bindParam(":account", $account);


        $sql = "SELECT * FROM ACTIVITY";

        //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        $statement = $pdo->query($sql);

        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();

        //echo json_encode($data)
        echo json_encode($data);
?>
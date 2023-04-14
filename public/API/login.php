<?php
    include("conn.php");	

    // 接收前端 POST 資料
    $jsonData = file_get_contents('php://input');

    // 解碼 JSON 資料並轉換成 PHP 陣列
    $postData = json_decode($jsonData, true);

    // 檢查解碼後的資料是否為陣列且包含需要的欄位
    if (is_array($postData) && isset($postData["account"]) && isset($postData["pwd"])) {

        // 建立 SQL
        $sql = "SELECT * FROM USER WHERE STATUS = 1 and ACCOUNT = ? and PASSWORD = ?";

        // 給值
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $postData["account"]);
        $statement->bindValue(2, $postData["pwd"]);
        $statement->execute();
        $data = $statement->fetchAll();

        if(COUNT($data) > 0){
            echo json_encode($data);

            // session_start();
            // $_SESSION["memberID"] = $name;
            // header("Location: Welcome.php");
        }else{
            echo "N";
        }

    } else {
        // 資料格式錯誤，回傳錯誤訊息
        echo "資料格式錯誤";
    }

    
?>

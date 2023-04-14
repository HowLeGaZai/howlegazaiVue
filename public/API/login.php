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

        $userAccount = "";
        $userNick ="";
        $userPic ="";
        foreach($data as $index => $row){
            $userAccount = $row["ACCOUNT"];
            $userNick =$row["NICKNAME"];
            $userPic = $row["PORTRAIT"];
        }

        // 判斷是否有會員資料
        if($userAccount != "" && $userNick != ""){
        // include("Member.php");

        if(!isset($_SESSION)){
            session_start(); 
        }

        //Table 'USER'裡的Account欄位值
        $_SESSION["userAccount"] = $userAccount; 
        // echo $_SESSION["userAccount"];
        //Table 'USER'裡的NICKNAME欄位值
        $_SESSION["userNickname"] = $userNick; 
        // echo $_SESSION["userNickname"];
		 //Table 'USER'裡的NICKNAME欄位值
		$_SESSION["userPic"] = $userPic; 

		$_SESSION["loginStatus"] = true; 

        // setMemberInfo($userAccount, $userNick, $userPic);

            // 登入成功
            echo "Y"; 
            // echo print_r($_SESSION); 
        }else{
            // 登入失敗
            echo "N"; 
        }

    } else {
        // 資料格式錯誤，回傳錯誤訊息
        echo "資料格式錯誤";
    }


    
?>

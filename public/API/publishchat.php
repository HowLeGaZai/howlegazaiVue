<?php
    include("conn.php");

    //建立SQL語法
    $sql = "INSERT into CHAT VALUES(?,?,?,?,?,?,NOW(),?,?,DEFAULT)";

    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $text = $_POST['text'];
    $userid = $_POST['userid'];
    $routerid = $_POST['routerid'];
    $pic = $_POST['pic'];
    // $pic = isset($_POST['pic']) ? $_POST['pic'] : '';

    // 如果有圖片，讀取圖片並存到伺服器上
    // if (!empty($_FILES['pic']['name'])) {
    //     $pic_name = $_FILES['pic']['name'];
    //     $pic_tmp_name = $_FILES['pic']['tmp_name'];
    //     $pic_size = $_FILES['pic']['size'];
    //     $pic_type = $_FILES['pic']['type'];
    //     $pic_ext = strtolower(pathinfo($pic_name, PATHINFO_EXTENSION));
    //     $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    //     if (in_array($pic_ext, $allowed_ext)) {
    //         $pic_value = file_get_contents($pic_tmp_name);
    //     } else {
    //         echo '不支援的檔案格式';
    //         exit;
    //     }
    // } else {
    //     // 如果沒有圖片，使用預設圖片
    //     $pic_value = file_get_contents('http://localhost/TGD104G1/src/assets/img/default.jpg');
    // }

    //執行
    $statement = $pdo -> prepare($sql);

    //給值
    $statement->bindValue(1, $routerid);
    $statement->bindValue(2, $category);
    $statement->bindValue(3, $title);
    $statement->bindValue(4, $content);
    $statement->bindValue(5, $text);
    // $statement->bindValue(6, $pic_value, PDO::PARAM_LOB);
    $statement->bindValue(6, $pic);
    $statement->bindValue(7, $userid);
    $statement->bindValue(8, $routerid);
   
    $statement->execute();

    echo '發布成功';

    // include("conn.php");

    // //建立SQL語法
    // $sql = "INSERT into CHAT VALUES(DEFAULT,?,?,?,?,'http://localhost/TGD104G1/src/assets/img/default.jpg',NOW(),?,NULL,NULL,?,DEFAULT)";

    // $category = $_POST['category'];
    // $title = $_POST['title'];
    // $content = $_POST['content'];
    // $text = $_POST['text'];
    // $pic = $_POST['pic'];
    // // $convert_content = mb_convert_encoding($content, 'UTF-8', 'auto');
    // $userid = $_POST['userid'];
    // $routerid = $_POST['routerid'];

    // //執行
    // $statement = $pdo -> prepare($sql);

    // //給值
    // $statement->bindValue(1, $category);
    // $statement->bindValue(2, $title);
    // $statement->bindValue(3, $content);
    // $statement->bindValue(4, $text);
    // $statement->bindValue(5, $userid);
    // $statement->bindValue(6, $routerid);
    // $statement->bindValue(7, $pic);
    // $statement->execute();

    // echo '發布成功';
?>

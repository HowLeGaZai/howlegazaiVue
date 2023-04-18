<?php

include("conn.php");
/***************************************************
 * 數據來源白名單 *
 ***************************************************/
$accepted_origins = array("http://localhost", "http://10.2.7.103", "http://localhost/TGD104G1/","http://localhost:8080/","https://tibamef2e.com/tgd104/g1/");

/*********************************************
 * 設置圖片保存的資料夾 *
 *********************************************/
$imageFolder = "/TGD104G1/dist/src/assets/img/";
// $imageFolder = "/img/userupload/";

reset ($_FILES);
$temp = current($_FILES);
if (!is_uploaded_file($temp['tmp_name'])){
  // 通知編輯器上傳失敗
  header("HTTP/1.1 500 Server Error");
  exit;
}

if (isset($_SERVER['HTTP_ORIGIN'])) {
    // 驗證來源是否在白名單內
    if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
        header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
      } else {
        header("HTTP/1.1 403 Origin Denied");
        exit;
      }
}

/*
  如果腳本需要接收cookie，在init中加入參數 images_upload_credentials : true
  並加入下面兩個被注釋掉的header內容
*/
header('Access-Control-Allow-Credentials: true');
header('P3P: CP="There is no P3P policy."');

// 過濾文件名是否合格
if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
    header("HTTP/1.1 400 Invalid file name.");
    exit;
}

// 驗證擴展名
if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
    header("HTTP/1.1 400 Invalid extension.");
    exit;
}

// 都沒問題，就將上傳數據移動到目標文件夾，此處直接使用原文件名，建議重命名
$filetowrite = $imageFolder . $temp['name'];
// move_uploaded_file($temp['tmp_name'], $filetowrite);

// 重新命名，確認是否名稱相同
if (file_exists($filetowrite)) {
  $newFileName = uniqid() . '.' . pathinfo($temp['name'], PATHINFO_EXTENSION);
  $filetowrite = $imageFolder . $newFileName;
}

move_uploaded_file($temp['tmp_name'], $filetowrite);


// 返回JSON格式的數據
// 形如下一行所示，使用location存放圖片URL
// { location : '/your/uploaded/image/file.jpg'}
echo json_encode(array('location' => $filetowrite));

?>
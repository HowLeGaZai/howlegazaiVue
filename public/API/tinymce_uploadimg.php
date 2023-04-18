<?php

include("conn.php");
/***************************************************
 * 數據來源白名單 *
 ***************************************************/
$accepted_origins = array("http://localhost", "http://10.2.7.103", "http://localhost/TGD104G1/","http://localhost:8080/","https://tibamef2e.com/tgd104/g1/");

/*********************************************
 * 設置圖片保存的資料夾 *
 *********************************************/
$imageFolder = "/TGD104G1/dist/img/";
// $imageFolder = "/img/userupload/";
echo 'asdad';
reset ($_FILES);
$temp = current($_FILES);

print_r(is_uploaded_file($temp['tmp_name']));
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
  return;


// Accept upload if there was no origin, or if it is an accepted origin
$filetowrite = $imageFolder . $temp['name'];
move_uploaded_file($temp['tmp_name'], $filetowrite);

// Determine the base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://";
$baseurl = $protocol . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER['REQUEST_URI']), "/") . "/";

// Respond to the successful upload with JSON.
// Use a location key to specify the path to the saved image resource.
// { location : '/your/uploaded/image/file'}
echo json_encode(array('location' => $baseurl . $filetowrite));
} else {
// Notify editor that the upload failed
header("HTTP/1.1 500 Server Error");
}



?>
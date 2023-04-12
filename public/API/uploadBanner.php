<?php

include("conn.php");


function getFilePath(){        

    //Apache實際的根目錄路徑
    $ServerRoot = $_SERVER["DOCUMENT_ROOT"];

    $filePath = "/howlegazaiVue2/src/assets/img/";

    return $ServerRoot.$filePath;
    
} 


print_r($_FILES);

if($_FILES["file"]["error"] && count($_FILES["file"]["error"]) > 0){
    echo "上傳失敗: 錯誤代碼".$_FILES["file"]["error"];
}else{


 //Server上的暫存檔路徑含檔名
 $filePath_Temp = $_FILES["file"]["tmp_name"];
//  echo "123".$filePath_Temp;

 //欲放置的檔案路徑
 $filePath = getFilePath().$_FILES["file"]["name"];

//  print_r( $filePath );

//  echo "copy($filePath_Temp, $filePath)";

 if(copy($filePath_Temp, $filePath)){



    //建立SQL
    $sql = "INSERT INTO WEB_BANNER(ID, BANNER) VALUES (DEFAULT,?)";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(1 , $_FILES["file"]["name"]);
    $statement->execute();

    //導頁                        
    echo "新增成功!";

}else{            
    echo "拷貝/移動上傳圖片失敗!";            
}

}

?>
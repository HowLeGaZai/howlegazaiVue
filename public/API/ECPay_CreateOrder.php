<?php
require_once 'ECPay.Payment.Integration.php';
 
$obj = new \ECPay_AllInOne();
 
//服務參數
//$obj->ServiceURL  = $_POST['ServiceURL'];

$obj->MerchantID  = '2000132';
$obj->HashKey     = '5294y06JbISpM5x9';
$obj->HashIV      = 'v77hoKGq4kWxNNIS';

 
//
$obj->Send['MerchantTradeNo'] = $_POST['MerchantTradeNo'];
$obj->Send['MerchantTradeDate'] = $_POST['MerchantTradeDate'];
$obj->Send['PaymentType'] = $_POST['PaymentType'];
$obj->Send['TotalAmount'] = (int)$_POST['TotalAmount'];
$obj->Send['TradeDesc'] = $_POST['TradeDesc'];
$obj->Send['ChoosePayment'] = $_POST['ChoosePayment'];
//$obj->Send['CreditInstallment'] = $_POST['CreditInstallment'];

$obj->ServiceURL = "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5";
$obj->Send['ReturnURL'] = "https://tibamef2e.com/tgd104/g1/API/ECPay_ReturnURL.php";
//$obj->Send['ReturnURL'] = " https://c2bb-1-164-247-93.ngrok-free.app/php20210701-main/ECPay_ReturnURL.php";


//$obj->Send['OrderResultURL'] = "https://ble.com.tw/test/ECPay_OrderResultURL.php";
 
//$obj->Send['ClientBackURL'] = "https://tibamef2e.com/tgd104/g1/dist/activity_registStep3"; //ECPay顯示交易結果頁.裡面帶出返回商店按鈕
$obj->Send['ClientBackURL'] = "http://localhost:8080/activity_registStep3"; //ECPay顯示交易結果頁.裡面帶出返回商店按鈕
 

$obj->Send['CustomField1']      = date('Y/m/d H:i:s');  	//額外的欄位
$obj->Send['CustomField2']      = "";  				  	//額外的欄位
 
//訂單的商品資料
array_push($obj->Send['Items'], array(
        'Name' => $_POST['TradeDesc'],
        'Price' => (int)$_POST['TotalAmount'],
        'Currency' => "元",
        'Quantity' => (int)"1"
    )
);
 
//產生訂單(auto submit至ECPay)
//$obj->CheckOut();
$Response = (string)$obj->CheckOutString();
echo $Response;
 
// 自動將表單送出
echo '
        <style>html{display:none;}</style>
        <script>document.getElementById("__ecpayForm").submit();</script>
    ';

?>
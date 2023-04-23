<template>
    <form id="idFormAioCheckOut" method="post" action="http://localhost/TGD104G1/public/API/ECPay_CreateOrder.php">
      <label>
        編號 (MerchantTradeNo):
        <input type="text" name="MerchantTradeNo" :value="time" class="form-control"/>
        不可重複使用。英數字大小寫混合
      </label>
      <label class="col-xs-12">
        時間 (MerchantTradeDate):
        <input type="text" name="MerchantTradeDate" :value="currentDate" class="form-control"/>
        yyyy/MM/dd HH:mm:ss
      </label>
      <label class="col-xs-12">
        類型 (PaymentType):
        <input type="text" name="PaymentType" value="aio" class="form-control"/>
        aio
      </label>
      <label class="col-xs-12">
        金額 (TotalAmount):
        <input type="text" name="TotalAmount" v-model="totalAmount" class="form-control"/>
        請帶整數，不可有小數點 僅限新台幣 金額不可為 0 元 CVS&BARCODE 最低限制為 30 元，最高限制為 30,000 元
      </label>
      <label class="col-xs-12">
        描述 (TradeDesc):
        <input type="text" name="TradeDesc" v-model="tradeDesc" class="form-control"/>
      </label>
      <label class="col-xs-12">
        名稱 (ItemName):
        <input type="text" name="ItemName" v-model="itemName" class="form-control"/>
        商品名稱以符號 # 分
      </label>
      <label class="col-xs-12">
        付款方式 (ChoosePayment):
        <input type="text" name="ChoosePayment" value="Credit"/>
        Credit:信用卡及 AndroidPay AndroidPay: AndroidPay  WebATM:網路 ATM ATM:自動櫃員機 CVS:超商代碼 BARCODE:超商條碼 ALL:不指定
      </label>
      <button type="submit" class="btn btn-default">綠界線上支付</button>
    </form>
  </template>
  
  <script>
  export default {
    
    data() {
      return {
        time: Date.now(),
        currentDate: '',
        totalAmount: 321,
        tradeDesc: '里民活動',
        itemName: '里民活動',
      };
    },
    mounted() {
        this.time = Date.now();
      
        const now = new Date();
        const year = now.getFullYear();
        const month = (now.getMonth() + 1).toString().padStart(2, '0');
        const day = now.getDate().toString().padStart(2, '0');
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        this.currentDate = `${year}/${month}/${day} ${hours}:${minutes}:${seconds}`;
    },
  };
  </script>
  
  <style>
    label {
      display: block;
    }
  </style>
  
<template>

    <div v-if="show">
    <div class="row account_row account_row2">
        <div class="col-md-3 col-12">
          
        </div>
        <div class="col-md-6 col-12">
           <label class="details displayflex">
            <h4>帳號</h4><span v-if="!accountValid" class="margintop5">*8~12字元，需包含英文小寫和數字</span>
            <span v-if="accountDuplicate" class="red">*{{this.badaccount}}帳號已被註冊</span>
           </label>
            <input 
            type="text" 
            class="f-text nomargin" 
            id="account" 
            v-model="account" 
            placeholder="帳號" 
            @blur="validateAccount"
            @focus="cleanBadaccount">
            
        </div>
        <div class="col-md-3 col-12">
            
        </div>
    </div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>密碼*</h4>
      <input type="text" class="f-text nomargin" id="password" v-model="password" placeholder="建議預設為手機號碼" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>確認密碼*</h4>
      <input type="text" class="f-text nomargin" id="password" v-model="password" placeholder="確認密碼" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>姓</h4>
      <input type="text" class="f-text nomargin" id="first_name" v-model="first_name" placeholder="姓" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>名</h4>
      <input type="text" class="f-text nomargin" id="last_name" v-model="last_name" placeholder="名" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>  

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>電子信箱</h4>
      <input type="text" class="f-text nomargin" id="email" v-model="email" placeholder="電子信箱" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>  

<!-- <button type="submit" class="btn-m btn-color-green" @click.self.prevent="dataSavetoObject">送出</button> -->
<button type="submit" class="btn-m btn-color-green" @click="dataSavetoObject">送出</button>


</div>

</template>

<script>
export default {
    props:["show"],
    data() {
            return {
                account: "",
                password: "",
                first_name:"",
                last_name:"",
                email:"",

                address:"",
                familyID:"",

                badaccount:'',

                accountDuplicate: false,

                accountValid: true,
                passwordValid: true,
                
              }
             },

            methods: {
            
            dataSavetoObject(){
              const data = JSON.stringify({
                ACCOUNT: this.account,
                // password:this.password,
                // first_name:this.first_name,
                // last_name:this.last_name,
                FULL_NAME:this.first_name+this.last_name,
                EMAIL:this.email,
                // Information: this.information,

                
              })


              const formData = new FormData()
              formData.append('ACCOUNT', this.account)
              formData.append('PASSWORD', this.password)
              formData.append('FIRST_NAME', this.first_name)
              formData.append('LAST_NAME', this.last_name)
              formData.append('EMAIL', this.email)
              formData.append('ADDRESS', this.address)
              formData.append('FAMILY_ID', this.familyID)

              axios
              .post('http://localhost/TGD104G1/public/API/account_add.php',formData)

                  .then(response => {
                      this.jsonData = response.data;
                      console.log(response.data);
                      
                  })
                  .catch(error => {
                      // console.log(error);
                  });

              this.$emit("value-update", {data:data, toggleShow:!this.show});
              

            },

            async validateAccount() {
              // 檢查帳號格式
              const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英數字混合帳號8~12位
              if (!accountRegex.test(this.account)) {
                this.accountValid = false;
                // this.account ="";
                return;
              }
              await this.checkDuplicateAccount(this.account); 
              this.accountValid = true;
            },
          

            async checkDuplicateAccount() {
            try {
              const formData2 = new FormData()
              formData2.append('account', this.account)
              
              const response = await axios.post('http://localhost/TGD104G1/public/API/check_duplicate_account.php', formData2);
              const result = response.data;
              console.log(result);
              if (result === 'duplicate') {
                // 帳號重複
                this.accountDuplicate =  true; // 設定為 true
                this.badaccount = this.account;
                this.account ="";
                this.$refs.myaccount.blur()
              
              } else {
                // 帳號未重複
                this.accountDuplicate = false; // 設定為 false
              }
            } catch (error) {
              console.error(error);
              // 處理錯誤
            }
          },

          getCookieValue(cookieName) {
                        // 讀取指定名稱的 Cookie 值
                        const cookieStr = decodeURIComponent(document.cookie);
                        const cookies = cookieStr.split('; ');
                        for (let i = 0; i < cookies.length; i++) {
                        const cookie = cookies[i].split('=');
                        if (cookie[0] === cookieName) {
                            return cookie[1] || null;
                        }
                        }
                        return null;
                    },


          cleanBadaccount(){
            this.badaccount = "";
            this.accountDuplicate =  false;
          },

          },

          mounted(){
            this.USER_ID = this.getCookieValue('id');

            const formData = new FormData()
            formData.append('ID', this.USER_ID)

            axios
              .post('http://localhost/TGD104G1/public/API/account_address.php',formData)

                  .then(response => {
                      this.address = response.data[0].ADDRESS;
                      this.familyID = response.data[0].FAMILY_ID;
                      console.log(response.data);

                      
                      
                  })
                  .catch(error => {
                      // console.log(error);
                  });


          },

}
</script>
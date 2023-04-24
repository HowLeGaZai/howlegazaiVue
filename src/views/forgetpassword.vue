<template>

<navbar></navbar>
<div class="bgc">
<main>
        
        <div class="center">
            <h2>忘記密碼</h2>
            <!-- <form  @submit.prevent="handleSubmit"> -->
              <div class="txt_field">
                <label>帳號<span v-if="!account" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!accountFormat" class="red">帳號格式錯誤</span></label>
                <input type="text" class="f-text label-left" maxlength="12"  placeholder="請輸入帳號" v-model.trim="account" @keyup="validateAccount">
              </div>
              <div class="txt_field">
                <label>電子郵件</label><span v-if="!email" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!emailFormat" class="red">email格式錯誤</span>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入電子信箱" required v-model.trim="email" @blur="validateEmail">
              </div>
              <div class="txt_field verification">
                <label>驗證碼</label><span v-if="!inputNumber" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!verifyNum" class="red">驗證碼錯誤</span>
                <input type="text" class="f-text label-left" id="name6" placeholder="請輸入下方數字驗證碼" v-model.trim="inputNumber">
              </div>
              <!-- 驗證碼 -->
              <div class="aaa">
              <div class="captcha f-text label-left">           
                  <h1>{{ number }}</h1>
              </div>
              <button type="button" class="btn-10-s btn-color-green" @click="generateNumber()" >   
                <i class="bi bi-arrow-clockwise"></i> 重整驗證碼     
              </button>      
              </div>
        <!-- </form> -->
          <!-- 最後送出的編號 -->
          <div class="bbb">
         <router-link to="./login"><button type="button" class="btn-m btn-color-white">返回</button></router-link>
         <button type="button" class="btn-m btn-color-green" @click="checkNumber()">下一步</button>
           
          
          </div>
          <!-- <div v-if="result" style="color: red;">{{ result }}</div> -->
          </div>
        
        </main>
      </div>
    
<Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  data() {
    return {
      //這個是驗證碼的預設值
      number : "",  
      inputNumber: "",
      // errorMessage: '不能空白',
      showError: false,
      // ==================
      // 這個是身分證
      account: '',
      accountFormat:true,
      emailFormat:true,
      verifyNum:true,
      result: '',
      // letters: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
      // areaCodeAll: ['10', '11', '12', '13', '14', '15', '16', '17', '34', '18', '19', '20', '21', '22', '35', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33']
      email:'',
      final:false,
      match: false,
    }
  },
    components: {
    Footer,
    navbar,
  },
  setup() {
   
  },
  methods: {
    // 這個是產生亂數驗證碼的函式
      generateNumber() {
        let number = ""; 
        for (let i = 0; i < 4; i++) {
        number += Math.floor(Math.random() * 10); //產生亂數 (整數)
      }
      this.number = number;  //這個是 抓出data 裡面的number
      this.verifyNum = true;
    },

    // 這個是 驗證
    checkNumber() {
      //這個是 你輸入的input 如果等於上方產生亂數的4碼 或是你輸入空值
      if (this.inputNumber === this.number  || this.inputNumber === null) {  
        console.log("true");
        this.verifyNum = true;
        // alert("驗證碼正確 有料~")
        // window.location.href = "#/login" 
      } else {
        // alert("驗證碼錯誤囉")
        this.verifyNum = false;
        // window.location.href = "#/forgetpassword.vue"
      }

      const forgetData = new FormData()
      forgetData.append('account', this.account)
      forgetData.append('email', this.email) 

      axios
        .post(`${process.env.VUE_APP_AJAX_URL}checkForget.php`, forgetData)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
            const result = response.data;
            if (result !== 'not_match') {
              this.final =  true; // 設定為 true
              console.log(this.final)
              console.log(this.verifyNum)

              if (this.final && this.verifyNum) {
                 let forgetid = response.data[0][0]; 
                sessionStorage.setItem("userID", forgetid);
                sessionStorage.setItem("forget", this.final);
                alert("帳號存在，前往更換密碼");
                this.$router.push({ path: '/updatepassword' })
              } else {
                alert("帳號或電子信箱或驗證碼有誤");
                this.generateNumber();
              }
            } else {
              this.final = false; // 設定為 false
              alert("帳號或電子信箱或驗證碼有誤");
              this.generateNumber();
            }
        })
        .catch(error => {
            console.log(error);
        });
    },

     validateAccount() {
      // 檢查帳號格式
      const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英數字混合帳號8~12位
      if (!accountRegex.test(this.account)) {
        this.accountFormat = false;
        // this.account ="";
        return;
      }
      this.accountFormat = true;
    },

     validateEmail() {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(this.email)) {
        this.emailFormat = false;
        return;
      }
      this.emailFormat = true; 
    },
    
 }, 
   
  mounted() {
      this.generateNumber();   
   
  },
};



</script>

<style>
.red-dot {
  color: rgb(255, 85, 85);
  font-size: 6px;
  
}
.red {
  color: rgb(255, 85, 85);
  font-size: 12px;
}
</style>
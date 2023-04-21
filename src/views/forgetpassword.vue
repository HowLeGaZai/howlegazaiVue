<template>

<navbar></navbar>
<div class="bgc">
<main>
        
        <div class="center">
            <h2>忘記密碼</h2>
            <!-- <form  @submit.prevent="handleSubmit"> -->
              <div class="txt_field">
                <label>帳號<span v-if="!account" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!accountFormat" class="red">*帳號格式錯誤</span></label>
                <input type="text" class="f-text label-left" maxlength="12"  placeholder="請輸入帳號" v-model.trim="account" @keyup="validateAccount">
              </div>
              <div class="txt_field">
                <label>電子郵件</label><span v-if="!email" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!emailFormat" class="red">*email格式錯誤</span>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入電子信箱" required v-model.trim="email" @blur="validateEmail">
              </div>
              <div class="txt_field verification">
                <label>驗證碼</label><span v-if="!inputNumber" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!verifyNum" class="red">*驗證碼錯誤</span>
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
    },
    // submitForm() {
    //   if (this.inputValue === '') {
    //     this.showError = true;
    //   } else {
    //     // 在這裡處理提交表單的邏輯
    //     this.showError = false;
        
    //   }
    // },
    // handleSubmit() {
    //   if (this.inputValue.trim() === '') {
    //     this.showError = true;
    //     return false; // 返回 false 來停止後續的程式碼執行
    //   }
    //   // 如果 input 不是空值，顯示下一頁連結
    //   this.showError = false;
    // },

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
        .post('http://localhost/TGD104G1/public/API/checkForget.php', forgetData)
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
              }
            } else {
              this.final = false; // 設定為 false
              alert("帳號或電子信箱或驗證碼有誤");
            }
        })
        .catch(error => {
            console.log(error);
        });
    },
    // 這裡是身分證驗證函式-------------------------------------------
    // check() {
    //   if (this.myId.length !== 10 && this.myId.length > 10) {
    //     this.result = '身分證輸入資料的長度要有 10 位';
    //   } else if (!this.letters.includes(this.myId.charAt(0).toUpperCase())) {
    //     this.result = '身分證第一個應該是字母 A ~ Z';
    //   } else if (this.myId.charAt(1) !== '1' && this.myId.charAt(1) !== '2') {
    //     this.result = '身分證第二個字要是 1 或 2';
    //   } else if (isNaN(parseInt(this.myId.substring(1, this.myId.length), 10)) || this.myId.substring(1, this.myId.length).length !== 9) {
    //     this.result = '身分證後面九個字都要是數字';
    //   } else {
      //  // 所有的检查都通过
      //   this.result = '通過';
      //   this.$router.push('./login')
      // }
    // },
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

        // 計算第一個英文字母的加權
      //   const letter = this.myId[0];
      // const index = this.letters.indexOf(letter);
      // const areaCode = this.areaCodeAll[index];
      // let checkCode = areaCode[0] * 1 + areaCode[1] * 9;
      
      // // 計算檢查碼
      // for (let i = 1; i <= 8; i++) {
      //   checkCode += parseInt(this.myId.charAt(i)) * (9 - i);
      // }
      // checkCode %= 10;

    

    
 }, 
   
  mounted() {
      this.generateNumber();

      // let labels = document.querySelectorAll('.collapsible-item-label');
      // let contents = document.querySelectorAll('.collapsible-item-content');

      // labels.forEach((label, index) => {
      //     label.addEventListener('click', () => {

      //         // 檢查是否已經打開
      //         const isOpen = label.classList.contains('open-item-label');
      //         const content = contents[index];
      //         const isContentOpen = content.classList.contains('open-item-content');

      //         // 移除所有元素上已經打開的樣式
      //         labels.forEach(label => label.classList.remove('open-item-label'));
      //         contents.forEach(content => content.classList.remove('open-item-content'));

      //         // 添加或移除打開的樣式
      //         if (!isOpen && !isContentOpen) {
      //         label.classList.add('open-item-label');
      //         content.classList.add('open-item-content');
      //         }
      //     });
      // });


    
   
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
<template>

<navbar></navbar>
<div class="bgc">
<main>
        
        <div class="center">
            <h2>忘記密碼</h2>
            <form>
              <div class="txt_field">
                <label>身分證</label>
                <input type="text" class="f-text label-left"  placeholder="請輸入身分證" v-model="myId">
              </div>
              <div class="txt_field">
                <label>電子郵件</label>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入電子信箱">
              </div>
              <div class="txt_field verification">
                <label>驗證碼</label>
                <input type="text" class="f-text label-left" id="name6" placeholder="請輸入驗證碼" v-model="inputNumber">
              </div>
              <!-- 驗證碼 -->
              <div class="aaa">
              <div class="captcha f-text label-left">           
                  <h1>{{ number }}</h1>
              </div>
              <button type="button" class="btn-10-s btn-color-green" @click="generateNumber()" >   
                <i class="bi bi-arrow-clockwise"></i> 變更     
              </button>      
              </div>
        </form>
          <!-- 最後送出的編號 -->
          <div class="bbb">
           <a href="#/login"><button type="button" class="btn-m btn-color-white">返回</button></a> 
           <a href="#/login"><button type="button" class="btn-m btn-color-green" @click="checkNumber() ,check()">修改</button></a>
           <div v-if="result">{{ result }}</div>
          </div>
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
      number : "1219",  
      inputNumber: "",
      // ==================
      // 這個是身分證
      myId: '',
      result: '',
      letters: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
      areaCodeAll: ['10', '11', '12', '13', '14', '15', '16', '17', '34', '18', '19', '20', '21', '22', '35', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33']
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

    // 這個是 驗證
    checkNumber() {
      //這個是 你輸入的input 如果等於上方產生亂數的4碼 或是你輸入空值
      if (this.inputNumber === this.number  || this.inputNumber === null) {  
        console.log("true");
        alert("驗證碼正確 有料~")
        // window.location.href = "#/login" 
      } else {
        alert("驗證碼錯誤囉 還想皮阿")
        // window.location.href = "#/forgetpassword.vue"
       }
    },
    // 這裡是身分證驗證函式-------------------------------------------
    check() {
      // 檢查輸入的長度
      if (this.myId.length !== 10  && this.myId.length > 10) {
        this.result = '輸入資料的長度要有 10 位';
        alert("身分證就是只有10位 輸入清楚可以嗎?")
      }

      // 檢查第一個字是否是 A ~ Z
        const firstLetter = this.letters.includes(this.myId.charAt(0).toUpperCase());
      if (!firstLetter) {
        this.result = '第一個應該是字母 A ~ Z';
        alert("大哥 第一個要是英文字母")
      }
        // 檢查後面九個字是否都是數字
        const num9 = parseInt(this.myId.substring(1, this.myId.length), 10);
      if (isNaN(num9) || num9.toString().length !== 9) {
        this.result = '後面九個字都要是數字';
        alert("後面都是要數字啦~姊")
      }
        // 檢查第二個字是否是 1 或 2
        const secondLetter = this.myId.charAt(1);
      if (secondLetter !== '1' && secondLetter !== '2') {
        this.result = '第二個字要是 1 或 2';
        alert("你不男不女喔 哪可能第二個數字 不是1 2?")
        return;
      }
        // 計算第一個英文字母的加權
        const letter = this.myId[0];
      const index = this.letters.indexOf(letter);
      const areaCode = this.areaCodeAll[index];
      let checkCode = areaCode[0] * 1 + areaCode[1] * 9;
      
      // 計算檢查碼
      for (let i = 1; i <= 8; i++) {
        checkCode += parseInt(this.myId.charAt(i)) * (9 - i);
      }
      checkCode %= 10;

      if (checkCode !== parseInt(this.myId.charAt(9))) {
        this.result = '不是合法的身分證字號';
      } else {
        this.result = '合法的身分證字號';
      }
    }

    
 }, 
   
  mounted() {
      let labels = document.querySelectorAll('.collapsible-item-label');
      let contents = document.querySelectorAll('.collapsible-item-content');

      labels.forEach((label, index) => {
          label.addEventListener('click', () => {

              // 檢查是否已經打開
              const isOpen = label.classList.contains('open-item-label');
              const content = contents[index];
              const isContentOpen = content.classList.contains('open-item-content');

              // 移除所有元素上已經打開的樣式
              labels.forEach(label => label.classList.remove('open-item-label'));
              contents.forEach(content => content.classList.remove('open-item-content'));

              // 添加或移除打開的樣式
              if (!isOpen && !isContentOpen) {
              label.classList.add('open-item-label');
              content.classList.add('open-item-content');
              }
          });
      });


    
   
  },
};



</script>
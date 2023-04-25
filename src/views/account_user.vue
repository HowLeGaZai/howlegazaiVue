<template>
  <div class="backend">
    <navbar></navbar>
    <div class="background_image">
      <main>
        <section class="account-border">
          <div class="account">
              <Accountsidebar :localPORTRAIT="localPORTRAIT"></Accountsidebar>
            
              <section class="account-content account_user_info">
              <h1 class="marginbottom30">個人資訊</h1>
              <div class="account_row col-md-6 col-12">
                <h4>地址</h4>
                <h4>{{ ADDRESS }}</h4>
              </div>
              
              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>帳號
                    <span v-if="!formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span>
                    <span v-if="!accountValid" class="red">*8~12字元，需包含英文小寫和數字</span>
                    <span v-if="accountDuplicate" class="red">帳號已被註冊</span></h4>
                  <input
                    type="text"
                    class="f-text nomargin changelineheight"
                    id="sAccount"
                    placeholder="請輸入帳號"
                    required
                    v-if="normalUser"
                    v-model="ACCOUNT"
                    ref="myaccount"
                    maxlength="12"
                    @blur="validateAccount"
                    @focus="cleanBadaccount"
                    @keyup="fisttimeEdit"
                  />
                  <h4 class="changelineheight" v-if="headHousehold">{{ ACCOUNT }}</h4>
                </div>
                
                <div class="col-md-6 col-12">
                  <h4>性別</h4>
                  <div class="row paddingleft10">
                    <label class="f-checkbox"
                      >男
                      <input
                        type="radio"
                        name="GENDER"
                        v-model="GENDER"
                        v-bind:value="'male'"
                        :disabled="headHousehold === true || canEdit === false"
                      />
                      <span class="checkmark"></span>
                    </label>
                    <label class="f-checkbox"
                      >女
                      <input
                        type="radio"
                        name="GENDER"
                        v-model="GENDER"
                        v-bind:value="'female'"
                        :disabled="headHousehold === true || canEdit === false"
                      />
                      <span class="checkmark"></span>
                    </label>
                    <label class="f-checkbox"
                      >不願回答
                      <input
                        type="radio"
                        name="GENDER"
                        v-model="GENDER"
                        v-bind:value="'noanswer'"
                        :disabled="headHousehold === true || canEdit === false"
                      />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                
              </div>
              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4 v-if="headHousehold">姓名</h4>
                  <h4 v-if="headHousehold">{{ FULL_NAME }}</h4>

                  <div class="row" v-if="normalUser">
                    <div class="col-md-6 col-12">
                      <h4>姓氏</h4>
                      <input
                        type="text"
                        class="f-text nomargin changelineheight"
                        id="FULL_NAME"
                        v-model="FIRST_NAME"
                        placeholder="請輸入姓名" required
                      />
                    </div>
                    <div class="col-md-6 col-12">
                      <h4>名字</h4>
                      <input
                        type="text"
                        class="f-text nomargin changelineheight"
                        id="FULL_NAME"
                        v-model="LAST_NAME"
                        placeholder="請輸入姓名" required
                      />
                    </div>
                  </div>

                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>暱稱</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="nickname"
                    v-model="NICKNAME"
                    placeholder="請輸入暱稱" required
                  />
                </div>
              </div>

              <div class="row account_row">

                <div class="col-md-6 col-12">
                  <h4>身份證字號<span v-if="canEdit" class="colorBlack"> *非必填</span><span v-if="!idNumValid" class="red">*請輸入正確身分證</span></h4>
                  <h4 v-if="headHousehold,!canEdit">{{ ID_NUMBER }}</h4>
                  <input type="text" v-if="canEdit" class="f-text nomargin" id="name" v-model.trim="ID_NUMBER" @blur="validateIdNum" placeholder="請輸入身份證字號">
                </div>
                
                <div class="col-md-6 col-12">
                  <h4>生日<span v-if="canEdit" class="colorBlack"> *非必填</span></h4>
                  <h4 v-if="headHousehold,!canEdit">{{ BIRTHDATE }}</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="BIRTHDATE" placeholder="YYYY/MM/DD"> -->
                  <input v-if="canEdit" type="date" class="f-text nomargin" id="birthdate" required v-model="BIRTHDATE" :max="maxBirthdate"/>
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>電子信箱<span v-if="!emailValid" class="red">*請輸入正確email</span></h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="name"
                    v-model.trim="EMAIL"
                    placeholder="請輸入聯絡電子郵件" required
                    @blur="validateEmail"
                  />
                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>手機號碼<span v-if="!phoneValid" class="red">*請輸入正確手機號碼</span></h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="name"
                    v-model.trim="PHONE"
                    placeholder="請輸入聯絡電話" required
                    @blur="validatePhone"
                  />
                </div>
              </div>

              <div class="row account_row">
                <div class="col-12">
                  <h4>變更大頭貼</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" placeholder="大頭照.jpg"> -->
                  <!-- <portrait-crop :dataURL="PORTRAIT"></portrait-crop> -->
                  <portrait-crop @result-changed="onResultChanged"></portrait-crop>
                </div>
              </div>

              <div class="account-row textalignright">
                <!-- <button type="button" class="btn-m btn-color-green"> -->
                  <button type="button" class="btn-m btn-color-green" @click="saveInput">
                  儲存
                </button>
              </div>
            </section>
          </div>
        </section>
        <!-- </div>
        </section> -->
      </main>
    </div>
  </div>
</template>


<script>
import navbar from "../components/navbar.vue";
import Accountsidebar from '@/components/Accountsidebar.vue';
import axios from 'axios';
import PortraitCrop from "../components/PortraitCrop.vue";
import { nextTick } from 'vue'
// import Address from "ipaddr.js";

export default {
  data() {
    return {
      // 戶長/成員/可否編輯預設
      headHousehold:'false',
      normalUser:'true',
      canEdit:'true',

      // cookieid
      userId:'',

      // USER
      ID:'',
      ADDRESS: '',
      ACCOUNT:'',
      FULL_NAME: '',
      NICKNAME:'',
      GENDER:'',
      ID_NUMBER:'',
      BIRTHDATE:'',
      EMAIL:'',
      PHONE:'',
      PORTRAIT:'',
      UPDATER:'',
      FIRST_NAME:'',
      LAST_NAME:'',
      jsonData: [],

      // localhost 大頭貼
      localPORTRAIT:'',

      // 生日最大值
      maxBirthdate: this.getToday(),

      // 驗證欄位 -- 表單送出 / 帳號是否重複 / 帳號格式 / 身分證格式 / email 格式 / 電話格式
      formSubmitted: true,
      accountDuplicate: false,
      accountValid: false,
      idNumValid: false,
      emailValid: false,
      phoneValid: false,
    };
  },

  mounted() {

        // localStorage 大頭貼傳值到側欄
        this.localPORTRAIT = localStorage.getItem("portrait");

        // 抓出原始 USER 資料
        const userId = this.getCookieValue("id");
        const url = "http://localhost/TGD104G1/public/API/account_user.php";
        const data = new FormData();
        data.append('user_id', userId);
        
        axios
            .post(url, data)
            .then((response) => {
              this.jsonData = response.data;
              this.accountInfo();
              this.signupUser();
            })
            .catch((error) => {
                console.error(error);
            });
  },
  methods: {

      getCookieValue(cookieName) {
        const cookies = document.cookie.split("; ");
        for (let i = 0; i < cookies.length; i++) {
          const cookie = cookies[i].split("=");
          if (cookie[0] === cookieName) {
            return cookie[1];
          }
        }
        return null;
      },

      accountInfo() {
        this.ID = this.jsonData[this.jsonData.length - 1].ID;
        this.ADDRESS = this.jsonData[this.jsonData.length - 1].ADDRESS;
        this.ACCOUNT = this.jsonData[this.jsonData.length - 1].ACCOUNT;
        this.FULL_NAME = this.jsonData[this.jsonData.length - 1].FULL_NAME;
        this.NICKNAME = this.jsonData[this.jsonData.length - 1].NICKNAME;
        this.GENDER = this.jsonData[this.jsonData.length - 1].GENDER;
        this.ID_NUMBER = this.jsonData[this.jsonData.length - 1].ID_NUMBER;
        this.BIRTHDATE = this.jsonData[this.jsonData.length - 1].BIRTHDATE;
        this.EMAIL = this.jsonData[this.jsonData.length - 1].EMAIL;
        this.PHONE = this.jsonData[this.jsonData.length - 1].PHONE;
        this.PORTRAIT = this.jsonData[this.jsonData.length - 1].PORTRAIT;
        this.UPDATER = this.jsonData[this.jsonData.length - 1].UPDATER;
        this.FIRST_NAME = this.jsonData[this.jsonData.length - 1].FIRST_NAME;
        this.LAST_NAME = this.jsonData[this.jsonData.length - 1].LAST_NAME;
        this.userId = this.getCookieValue("id");
      },

      // 判斷註冊是否為非戶長
      signupUser(){
          
          // 如果註冊人非戶長
          if (this.UPDATER != this.userId){
            
            // 註冊非戶長且未更新過生日與身分證
            this.headHousehold = false;
            this.normalUser = true;

  
              // 註冊非戶長且已更新過生日與身分證
              if(this.BIRTHDATE === null || this.ID_NUMBER === null){
                this.canEdit = true;
              }else{
                this.canEdit = false;
              };

          // 如果註冊人為戶長
          }else{
            this.headHousehold = true;
            this.normalUser = false;
            this.canEdit = false;
          }
        },


      // 尚未完成：表單驗證、表單儲存
      // 驗證欄位

      // 檢查帳號格式
      async validateAccount() {
        const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英數字混合帳號8~12位
        if (!accountRegex.test(this.account)) {
          this.accountValid = false;
          // this.account ='';
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
              this.account ='';
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

      cleanBadaccount(){
          this.badaccount = '';
          this.accountDuplicate =  false;
      },

      // 驗證欄位
      getToday() {
          const today = new Date()
          const yyyy = today.getFullYear()
          const mm = String(today.getMonth() + 1).padStart(2, '0')
          const dd = String(today.getDate()).padStart(2, '0')
          return `${yyyy}-${mm}-${dd}`
      },

      validateIdNum() {
        const idNumRegex = /^[A-Z]{1}[1-2]{1}\d{8}$/; // 台灣身分證字號正規表達式
        if (!idNumRegex.test(this.idNum)) {
          this.idNumValid = false; // 身分證字號格式不符，設定為 false
          return;
        }
        this.idNumValid = true; // 身分證字號格式正確，設定為 true
      },
      
      validateEmail() {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(this.email)) {
          this.emailValid = false;
          return;
        }
        this.emailValid = true; 
      },

      validatePhone() {
        const phoneRegex = /^09\d{8}$/;
        if (!phoneRegex.test(this.phoneNum)) {
          this.phoneValid = false;
        } else {
          this.phoneValid = true;
        }
      },

      onResultChanged(result) {
        // console.log(result.dataURL);
        this.dataURL = result.dataURL;
        // console.log(this.dataURL);
      },

      //送出表單按鈕
      submitForm() {
        this.formSubmitted = true;
        if (this.account === '' || this.password === '' || this.lastName === '' || this.firstName === '' ||
        this.nickName === '' ||  this.idNum === '' || this.birth == null || this.email === '' || this.phoneNum === '' || this.agree == false || this.idFront === '' || this.idBack === '' || this.accountValid == false || this.passwordValid == false || this.idNumValid == false || this.emailValid == false || this.phoneValid == false  || this.accountDuplicate == true) {
          alert('請正確填寫必填欄位');
          // this.$router.push('./signup2')
          return;
        }else {
          this.saveInput();
        }
        // 在這裡編寫提交表單的程式碼
        console.log('表單提交成功');  
      },

      saveInput() {
        const userId = this.getCookieValue("id");
        const GENDER = this.GENDER;
        const ID_NUMBER = this.ID_NUMBER;
        const BIRTHDATE = this.BIRTHDATE;
        const NICKNAME = this.NICKNAME;
        const EMAIL = this.EMAIL;
        const PHONE = this.PHONE;
        const PORTRAIT = this.dataURL;

        const url = 'http://localhost/TGD104G1/public/API/updateAccount.php';
        const data = new FormData();
        data.append('user_id', userId);
        data.append('GENDER', GENDER);
        data.append('ID_NUMBER', ID_NUMBER);
        data.append('BIRTHDATE', BIRTHDATE);
        data.append('NICKNAME', this.NICKNAME);
        data.append('EMAIL', this.EMAIL);
        data.append('PHONE', this.PHONE);
        data.append('PORTRAIT', PORTRAIT);

        axios.post('http://localhost/TGD104G1/public/API/updateAccount.php', data)
        .then(function (response) {
          console.log(response.data); // 輸出回應資料
          if (response.data.status === 'success') {
            alert(response.data.message); // 顯示儲存成功訊息
          } else {
            alert('儲存失敗'); // 顯示儲存失敗訊息
          };
          nextTick(() => {
            this.mounted(); // 重新調用 mounted 函數
            console.log("成功mounted")
          });
        });

        axios.post(url, data)
        .then(response => {
          this.jsonData = response.data;
          this.accountInfo();
          // console.log(NICKNAME);
        })
        .catch(error => {
          console.log(error);
        });


        
        location.reload();
      },
      
      // updateNickname(newNickname) {
      //   // 新的 nickname
      //   document.cookie = "nickname=" + newNickname;

      //   // 从cookie中讀取nickname值
      //   const cookieNickname = document.cookie.replace(/(?:(?:^|.*;\s*)nickname\s*\=\s*([^;]*).*$)|^.*$/, "$1");
      //   console.log(cookieNickname)
      // },
      // getCookie(id) {
      //   const value = `; ${document.cookie}`;
      //   const parts = value.split(`; ${id}=`);
      //   if (parts.length === 2) return parts.pop().split(';').shift();

      //   console.log(id);
      // },
      

      getCookie(nickman) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${nickman}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();

        console.log(nickman)
      },
  },
  watch: {
    async getResult() {
      this.dataURL = this.$refs.PortraitCrop.getResult(dataURL);
    }
  },
  computed: {},
  components: {
    navbar,
    PortraitCrop,
    Accountsidebar,
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
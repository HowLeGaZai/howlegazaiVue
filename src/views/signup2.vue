<template>
  <navbar></navbar>
  <div class="bgc">

    <main>

      <div class="center">
        <div class="container">
          <h2 class="p-10">註冊</h2>

          <section class="content">
            <div class="threesteps">
              <div class="steps">
                <div class="steps-circle">1</div>
                <h5>填寫資料</h5>
              </div>
              <div class="line"></div>
              <div class="steps">
                <div class="steps-circle">2</div>
                <h5>確認資料</h5>
              </div>
            </div>

            <div class="signup2">
              <!-- 只有一個元素 -->
              <div>
                <label>住址</label>
                <input
                  type="text"
                  class="f-text"
                  id="sAddress"
                  disabled
                  required
                  v-model="address"
                />
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">帳號<span v-if="!account && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!accountValid" class="red">*8~12字元，需包含英文小寫和數字</span><span v-if="accountDuplicate" class="red">*{{this.badaccount}}帳號已被註冊</span></label>
                  <input
                    type="text"
                    class="f-text"
                    id="sAccount"
                    placeholder=""
                    required
                    v-model="account"
                    ref="myaccount"
                    maxlength="12"
                    @blur="validateAccount"
                    @focus="cleanBadaccount"
                  />
                </div>

                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">密碼<span v-if="!password && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!passwordValid" class="red">*8~12字元，需包含英文小寫和數字</span></label>
                  <input
                    type="password"
                    class="f-text"
                    id="sPassword"
                    placeholder=""
                    required
                    v-model.lazy.trim="password"
                    maxlength="12"
                    @blur="validatePassword"
                  />
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">姓<span v-if="!firstName && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
                  <input type="text" class="f-text" id="sLastname" placeholder="" required v-model.trim="firstName" @blur="xEmpty"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">名<span v-if="!lastName && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
                  <input type="text" class="f-text" id="sFirstname" placeholder="" required v-model.trim="lastName"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">暱稱<span v-if="!nickName && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
                  <input type="text" class="f-text" id="sNickname" placeholder="" required v-model.trim="nickName"/>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">身分證字號<span v-if="!idNum && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
        
                  <input type="text" class="f-text" id="sID" placeholder="" maxlength="10" minlength="10" required v-model.trim="idNum" @blur="validateIdNum"/>
                   <span v-if="!idNumValid" class="red">*請輸入正確身分證字號</span>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">出生年/月/日<span v-if="!birth && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
                  <input type="date" class="f-text" id="birthdate" required v-model="birth" :max="maxBirthdate"/>
                 
                </div>
                <div class="gender-details col-sm-12 col-sm-4">
                  <!-- <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3"> -->
                  <label class="details">性別<span v-if="!gender && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></label>
                  <div class="category">
                    <label class="f-checkbox"
                      >男
                      <input type="radio" name="gender" value="male" v-model="gender"/>
                      <span class="checkmark"></span>
                    </label>
                    <label class="f-checkbox"
                      >女
                      <input type="radio" name="gender" value="female" v-model="gender"/>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">電子信箱<span v-if="!email && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!emailValid" class="red">*請輸入正確email</span></label>
                  <input type="text" class="f-text" id="sEmail" placeholder="e.g.123@abc.com" required v-model.trim="email"
                  @blur="validateEmail"/>
                </div>
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">手機號碼<span v-if="!phoneNum && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span><span v-if="!phoneValid" class="red">*請輸入正確手機號碼</span></label>
                  <input type="text" class="f-text" id="sPhone" placeholder="" maxlength="10" minlength="10" required v-model.trim="phoneNum" 
                  @blur="validatePhone"/>
                </div>
              </div>

                <!-- 上傳圖片 -->
                <div>
                  <label>身分證影本</label>
                  <section class="section_right addflex">
                      <p>正面<span v-if="!idFront && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></p>
                      <picture-cropid @data-updated1="handleDataUpdated1"></picture-cropid>

                      <p>反面<span v-if="!idBack && formSubmitted" class="red-dot"><i class="bi bi-asterisk"></i></span></p>
                      <picture-cropid @data-updated2="handleDataUpdated2"></picture-cropid>
                    </section>
                </div>
              </div>

              <div class="agree">
                <input
                  type="checkbox"
                  name="gender"
                  style="width: 20px; height: 20px"
                  required
                  v-model="agree"
                /><p>我已經詳閱並同意<a href="/privacy" target="_black">隱私權保護政策</a></p>
              </div>
               <p v-if="!agree && formSubmitted" class="red">*請您詳細閱讀本服務隱私權保護政策</p>
              <!-- 包住兩個按鈕 -->
              <div class="submit">
                <!-- <div class="button"> -->
                
                  <button type="button" class="btn-m btn-color-white" @click="retunForm">
                    返回
                  </button>
              
                
                  
              <!-- <router-link to="./login">  -->
                  <button type="button" class="btn-m btn-color-green" @click="submitForm">
                    送出
                  </button>
                <!-- </router-link> -->
              </div>
              <!-- --------------------------------------- -->
          </section>
        </div>
      </div>

    </main>
  </div>

  <Footer></Footer>
</template>

<script>
import navbar from "../components/navbar.vue";
import Footer from "../components/Footer.vue";
import PictureCropid from '../components/PictureCropid.vue';


export default {
  emits: ['data-updated1', 'data-updated2'],
  components: {
    Footer,
    navbar,
    PictureCropid,
    
  },
  data(){
    return {
      address: "",
      account:'',
      badaccount:'',

      password:'',
      firstName: '',
      lastName: '',
      nickName: '',
      idNum: '',
      gender:'',
      email: '',
      phoneNum: '',
      agree: false,
      idFront : '' ,
      idBack : '' , 
      birth: null,
      maxBirthdate: this.getToday(),

      formSubmitted: false,

      accountDuplicate: false,

      accountValid: true,
      passwordValid: true,
      idNumValid: true,
      emailValid: true,
      phoneValid: true,
    };
  },
  setup() {
    return {};
  },
  methods: {
    //返回按鈕
    retunForm(){
      this.$router.push('./signup1')
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
      
      const response = await
      
      axios.post('http://localhost/TGD104G1/public/API/check_duplicate_account.php', formData2);
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
    getToday() {
        const today = new Date()
        const yyyy = today.getFullYear()
        const mm = String(today.getMonth() + 1).padStart(2, '0')
        const dd = String(today.getDate()).padStart(2, '0')
        return `${yyyy}-${mm}-${dd}`
    },
    cleanBadaccount(){
      this.badaccount = "";
      this.accountDuplicate =  false;
    },
     validatePassword() {
      // 檢查密碼格式
      const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英文小寫+數字，8-12碼
      if (!accountRegex.test(this.password)) {
        this.passwordValid = false;
        // this.password ="";
        return;
      }
      this.passwordValid = true;
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
    handleDataUpdated1(data) {
    // 處理從第一個子層接收到的資料
    // console.log('接收到第一個子層資料:', data);
    this.idFront = data;
    },
    handleDataUpdated2(data) {
      // 處理從第二個子層接收到的資料
      // console.log('接收到第二個子層資料:', data);
      this.idBack = data;
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
        this.savedata();
        alert('您的申請已送出，請等待註冊審核')
        this.$router.push('./login')
      }
      // 在這裡編寫提交表單的程式碼
      console.log('表單提交成功');  
    },
    savedata(){
      const userformData = new FormData()
      userformData.append('address', this.address)
      userformData.append('account', this.account)
      userformData.append('password', this.password)
      userformData.append('firstName', this.firstName)
      userformData.append('lastName', this.lastName)
      userformData.append('fullname', this.firstName + this.lastName)
      userformData.append('nickName', this.nickName)
      userformData.append('idNum', this.idNum)
      userformData.append('birthdate', this.birth)
      userformData.append('gender', this.gender)
      userformData.append('email', this.email)
      userformData.append('phoneNum', this.phoneNum)
      userformData.append('idFront', this.idFront)
      userformData.append('idBack', this.idBack)

      axios
        .post('http://localhost/TGD104G1/public/API/signup.php', userformData)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });
    },
    
  },
  mounted() {
    this.address = localStorage.getItem("address");

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
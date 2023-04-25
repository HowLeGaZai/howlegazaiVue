<template>
  <navbar></navbar>
<div class="bgc">
  <main>
        <div class="center">
            <h2 class="updatepwd">修改密碼</h2>
            <div>
              <div class="txt_field">
                <label>新密碼</label><span v-if="!validPassword" class="red">*8~12字元，需包含英文小寫和數字</span>
                <input type="password" class="f-text label-left" placeholder="請輸入新密碼" v-model="newPassword"  @keyup="handleKeyUp">
              </div>
              <div class="txt_field">
                <label>確認新密碼<span v-if="!consistent" class="red"> *密碼不一致</span></label>
                <input type="password" class="f-text label-left" placeholder="請輸入新密碼" v-model="confirmPassword" @keyup="updatePassword">
              </div>
            </div>
          <!-- 最後送出的編號 -->
          <div class="bbb">
          <button type="button" class="btn-m btn-color-white" @click="cancel">取消</button>
           <button type="button" class="btn-m btn-color-green" @click="updatePwd">送出</button>
          </div>
          </div>
        
     
        </main>

      </div>

  <Footer></Footer>
</template>

<script>

import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';

export default {
  components: {
      navbar,Footer,
    },
  data() {
    return {
      userID:'',
      allow:false,
      newPassword: '',
      confirmPassword: '',
      consistent: true,
      validPassword: true,
    };
  },
  mounted(){
     this.userID = sessionStorage.getItem('userID'); 
     this.allow = sessionStorage.getItem('forget'); 
     if(!this.userID || !this.allow){
        this.$router.push('/');
     }
  },
  methods: {
    cancel() {
      // 取消修改密碼
      this.$router.push('/');
    },
    validatePwd() {
      // 檢查密碼格式
      const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英數字混合帳號8~12位
      if (!accountRegex.test(this.newPassword)) {
        this.validPassword = false;
        // this.account ="";
        return;
      }this.validPassword = true;
    },
    updatePassword() {
      if (this.confirmPassword !== '' && this.newPassword === this.confirmPassword) {
        // 密碼一致，執行修改密碼的程式碼
        this.consistent = true;
        console.log('執行修改密碼的程式碼');
      } else {
        // 密碼不一致，顯示錯誤提示
        this.consistent = false;
      }
    },
    handleKeyUp(){
      this.validatePwd();
      this.updatePassword();
    },
    updatePwd() {
      if (this.consistent && this.validPassword) {
        // 執行修改密碼的程式碼
          
          const updateData = new FormData()
          updateData.append('userid', this.userID)
          updateData.append('newpwd', this.newPassword)

        axios.post('http://localhost/TGD104G1/public/API/updatePassword.php', updateData)
          .then(response => {
            console.log(response.data);
            // 將修改密碼成功訊息顯示在畫面上
            alert('修改密碼成功！請用新密碼登入');
            // 導回首頁
            sessionStorage.clear();
            this.$router.push('/');
          })
          .catch(error => {
            console.log(error);
        });
      }
   },
  },
};
</script>


<style>

.red {
  color: rgb(255, 85, 85);
  font-size: 12px;
}
</style>
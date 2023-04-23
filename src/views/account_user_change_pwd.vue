<template>
    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
        <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :localPORTRAIT="localPORTRAIT"></Accountsidebar>
                <section class="account-content">
                    <h1 class="marginbottom30">變更密碼</h1>
                    <div class="changePwd_Content">
                        <div class="">
                            <h4>舊密碼<span v-if="!password"><i class="bi bi-asterisk"></i></span><span v-if="passwordDuplicate" class="red">密碼錯誤</span></h4>
                            <input
                            type="password"
                            class="f-text nomargin"
                            id="sPassword"
                            placeholder="請輸入未更改前密碼"
                            required
                            v-model="oldpassword"
                            maxlength="12"
                            @change="checkOldPassword"
                            >
                            <i class="bi bi-eye-slash-fill" @click="openpwd"></i>
                            <!-- @keyup="checkOldPassword" -->
                            <!-- <input type="text" class="f-text nomargin" id="pwd" v-model="pwd" placeholder="請輸入原先密碼" > -->
                        </div>
                        <div class="">
                            <h4>新密碼<span v-if="!password"><i class="bi bi-asterisk"></i></span><span v-if="!passwordValid">*8~12字元，需包含英文小寫和數字</span></h4>
                            <input
                                    type="password"
                                    class="f-text nomargin"
                                    id="sPassword"
                                    placeholder="8~12字元，需包含英文小寫和數字"
                                    required
                                    v-model.lazy.trim="newpassword"
                                    maxlength="12"
                                    @blur="checkPassword(oldpassword)"
                                ><i class="bi bi-eye-slash-fill" @click="openpwd"></i>
                            <!-- <input type="text" class="f-text nomargin" id="newpwd" v-model="newpwd" placeholder="8~12字元，需包含英文小寫和數字" > -->
                        </div>
                        <div class="">
                            <h4>再次輸入新密碼<span v-if="!password"><i class="bi bi-asterisk"></i></span><span v-if="!passwordValid">*8~12字元，需包含英文小寫和數字</span></h4>
                            <input
                                    type="password"
                                    class="f-text nomargin"
                                    id="sPassword"
                                    placeholder="請再輸入一次"
                                    required
                                    v-model.lazy.trim="newpasswordDouble"
                                    maxlength="12"
                                    @blur="checkPassword(newpassword)"
                                    @change="checkNewPassword"
                                ><i class="bi bi-eye-slash-fill" @click="openpwd"></i>
                                <!-- bi-eye-fill -->
                            <!-- <input type="text" class="f-text nomargin" id="newpwd2" v-model="newpwd2" placeholder="請再輸入一次" > -->
                        </div>
                        <button class="btn-m btn-color-green marginbottom20" @click="submitNewPWD">送出修改</button>

                  </div>  
                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>
import navbar from './navbar.vue';
import Accountsidebar from '@/components/Accountsidebar.vue';

export default {
     data(){
        return {
            localPORTRAIT:"",
            oldpassword:'',
            newpassword:'',
            newpasswordDouble:'',

            userId:'',
            updater:'',

            passwordValid: true,
            passwordDuplicate:false,

            datas:[],

        }
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

        openpwd(event) {
            // 取得 i 元素
            const icon = event.target;
            // 切換 i 元素的類別
            icon.classList.toggle("bi-eye-fill");
            icon.classList.toggle("bi-eye-slash-fill");

            // 取得要修改的 input 元素
            const passwordInput = icon.previousSibling;

            if (passwordInput.type === "password") {
                passwordInput.setAttribute("type", "text");
            } else {
                passwordInput.setAttribute("type", "password");
            }
        },
        
        // 舊密碼比對資料庫是否相符
        async checkOldPassword(){
            
            try {
                const userId = this.getCookieValue("id");
                const oldpassword = this.oldpassword;
                
                console.log(userId);
                console.log(oldpassword)
                
                const formData2 = new FormData()
                formData2.append('OLDPASSWORD', this.oldpassword)
                formData2.append('userId', this.userId)
                const response = await
                
                axios.post('http://localhost/TGD104G1/public/API/account_check_pwd.php', formData2);
                const result = response.data;
                console.log(result);
                if (result === 'nosame') {
                    // 密碼不一致
                    this.passwordDuplicate =  true; // 設定為 true
                    
                } else {
                    // 密碼一致
                    this.passwordDuplicate = false; // 設定為 false
                }
            } catch (error) {
                console.error(error);
                // 處理錯誤
            }
        },

        // 驗證新密碼與再次輸入密碼
        checkPassword(){
            validatePassword(password);
            checkFirstPwd();
            checkNewPassword();
        },

        validatePassword(password) {
            // 檢查單一密碼欄位是否符合指定格式
            const passwordRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英文小寫+數字，8-12碼

            if (!passwordRegex.test(password)) {
                this.passwordValid = false;
                // this.password = "";
                return;
            }
            this.passwordValid = true;
        },

        // 確認第一次新密碼是否有輸入
        checkFirstPwd(){
            console.log(this.newpassword);
            const firstPwd = this.newpassword;
            console.log(firstPwd);

            if(firstPwd === ""){
                alert('請先輸入上面欄位')
            }else{
                this.newpassword = firstPwd;
            }
        },

        // 確認兩次新密碼是否輸入一致
        checkNewPassword(){

            const firstPwd = this.newpassword;
            const secondPwd = this.newpasswordDouble;

            if (!firstPwd & secondPwd != firstPwd || firstPwd != secondPwd){
                alert('輸入的密碼不一致');
            }else{
                this.newpasswordDouble = secondPwd;
            }            
        },
        
        //送出表單按鈕
        submitNewPWD(){
            this.formSubmitted = true;
            if (this.account === '' || this.password === '' || this.lastName === '' || this.firstName === '' ||
            this.nickName === '' ||  this.idNum === '' || this.birth == null || this.email === '' || this.phoneNum === '' || this.agree == false || this.idFront === '' || this.idBack === '' || this.accountValid == false || this.passwordValid == false || this.idNumValid == false || this.emailValid == false || this.phoneValid == false  || this.accountDuplicate == true) {
                alert('請正確填寫必填欄位');
                // this.$router.push('./signup2')
                return;
            }else {
                this.savedata();
                alert('註冊成功，請登入')
                this.$router.push('./login')
            }
            // 在這裡編寫提交表單的程式碼
            console.log('表單提交成功');  
        },
        // clearCookies() {
        //     // 取得目前的 cookie 字串
        //     let cookies = document.cookie;
        //     // 將 cookie 字串分割成每個 cookie
        //     let cookieArr = cookies.split("; ");
        //     // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
        //     for (let i = 0; i < cookieArr.length; i++) {
        //     let cookie = cookieArr[i];
        //     let eqPos = cookie.indexOf("=");
        //     let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        //     document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
        //     }
        // },
    },
    components:{
        navbar,Accountsidebar
    },
    mounted(){
        this.localPORTRAIT = localStorage.getItem("portrait");

    },
}
</script>
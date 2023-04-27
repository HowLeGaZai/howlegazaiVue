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
                            <h4>舊密碼<span v-if="formSubmitted"><i class="bi bi-asterisk"></i>必填</span><span v-if="passwordDuplicate">密碼正確</span></h4>
                            <input
                            type="password"
                            class="f-text nomargin"
                            placeholder="請輸入未更改前密碼"
                            required
                            v-model="oldpassword"
                            maxlength="12"
                            @blur="checkOldPassword"
                            >
                            <i class="bi bi-eye-slash-fill" @click="openpwd"></i>
                            <!-- @keyup="checkOldPassword" -->
                            <!-- <input type="text" class="f-text nomargin" id="pwd" v-model="pwd" placeholder="請輸入原先密碼" > -->
                        </div>
                        <div class="">
                            <h4>新密碼<span v-if="formSubmitted"><i class="bi bi-asterisk"></i>必填</span><span v-if="!passwordValid">*8~12字元，需包含英文小寫和數字</span></h4>
                            <input
                                    type="password"
                                    class="f-text nomargin"
                                    placeholder="8~12字元，需包含英文小寫和數字"
                                    required
                                    v-model="newpassword"
                                    maxlength="12"
                                    @blur="checkPassword"
                                ><i class="bi bi-eye-slash-fill" @click="openpwd"></i>
                            <!-- <input type="text" class="f-text nomargin" id="newpwd" v-model="newpwd" placeholder="8~12字元，需包含英文小寫和數字" > -->
                        </div>
                        <div class="">
                            <h4>再次輸入新密碼<span v-if="formSubmitted"><i class="bi bi-asterisk"></i>必填</span></h4>
                            <input
                                    type="password"
                                    class="f-text nomargin"
                                    placeholder="請再輸入一次"
                                    required
                                    v-model="newpasswordDouble"
                                    maxlength="12"
                                    @blur="checkNewPassword"
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
import navbar from '../components/navbar.vue';
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

            formSubmitted : false,

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
        
        // 小眼睛開合
        openpwd(event) {
            // 取得 i 元素
            const icon = event.target;
            // 切換 i 元素的類別
            icon.classList.toggle("bi-eye-fill");
            icon.classList.toggle("bi-eye-slash-fill");

            // 取得 i 上面一層的 input 元素
            const passwordInput = icon.previousSibling;

            if (passwordInput.type === "password") {
                passwordInput.setAttribute("type", "text");
            } else {
                passwordInput.setAttribute("type", "password");
            }
        },

        // 比對輸入舊密碼是否與資料庫原始密碼相符
        async checkOldPassword(){
            
            try {
                const userId = this.getCookieValue("id");
                const oldpassword = this.oldpassword;
                this.userId = userId;
                
                const formData = new FormData()
                formData.append('OLDPASSWORD', this.oldpassword)
                formData.append('userId', this.userId)
                const response = await
                
                axios.post('http://localhost/TGD104G1/public/API/account_check_pwd.php', formData);
                const result = response.data;
                console.log(result);
                if (result === 'notsame' && this.oldpassword != "") {
                        // 密碼不一致
                        alert('密碼錯誤');
                        this.passwordDuplicate = false;           
                } else if(result === 'same'){
                    // 密碼一致
                    this.passwordDuplicate = true;
                    setTimeout(() => {
                        this.passwordDuplicate = false;
                    }, 2000); // 2 秒
                }else{};
            } catch (error) {
                console.error(error);
            // 處理錯誤
            }
        },

        // 輸入舊密碼後要確認 1. 格式驗證 2. 是否與下個欄位再次輸入密碼一致
        checkPassword(){
            this.validatePassword();
            this.checkNewPassword();
        },

    
        // 檢查密碼格式
        validatePassword() {
            const accountRegex = /^(?=.*[a-z])(?=.*\d)[a-z\d]{8,12}$/i; // 英數字混合帳號8~12位
            if (!accountRegex.test(this.newpassword)) {
                this.passwordValid = false;
                // this.account ="";
                return;
            }this.passwordValid = true;
        },
        
        // 確認兩次新密碼是否輸入一致
        checkNewPassword(){

            const firstPwd = this.newpassword;
            const secondPwd = this.newpasswordDouble;

            if (firstPwd != '' && secondPwd != '' && firstPwd != secondPwd){
                    alert('你輸入的密碼不一致')
                }
                // else{
                //     if(firstPwd == ""){
                //         alert('請先輸入前一欄');
                //         this.newpasswordDouble = "";
                //     }
                    else{
                        this.newpasswordDouble = secondPwd;
                        this.newpasswordNotsame();
                    };
        },

        // 確認輸入新密碼是否輸入為全新值
        async newpasswordNotsame(){
                            
            try {
                const userId = this.getCookieValue("id");
                const newpasswordDouble = this.newpasswordDouble;
                this.userId = userId;
                
                const formData2 = new FormData()
                formData2.append('OLDPASSWORD', this.newpasswordDouble)
                formData2.append('userId', this.userId)
                const response = await
                
                axios.post('http://localhost/TGD104G1/public/API/account_check_pwd.php', formData2);
                const result = response.data;

                console.log("進來此函式")
                if (result === 'same') {
                    // 新密碼假裝有更新
                    alert('新密碼與舊密碼太過類似，請重新輸入');
                    this.newpassword = "";
                    this.newpasswordDouble = "";
                } else{
                    // 新密碼真的有更新
                    this.newpasswordDouble = newpasswordDouble;
                };
            // 處理錯誤
            } catch (error) {
                console.error(error);
            }
        },
       
        //送出表單按鈕
        submitNewPWD(){
            if (this.oldpassword === '' || this.newpassword === '' || this.newpasswordDouble === '') {
                this.formSubmitted = true;
                setTimeout(() => {
                    this.formSubmitted = false;
                }, 2000); // 2 秒     

                console.log("不能儲存")
            }else {
                this.savedata();
            }
        },

        // 儲存新密碼
        savedata(){
            const formData3 = new FormData()
            const userId = this.getCookieValue("id");
            const newpasswordDouble = this.newpasswordDouble;
            formData3.append('userid', this.userId)
            formData3.append('newpwd', this.newpasswordDouble)

            axios
                .post('http://localhost/TGD104G1/public/API/updatePassword.php', formData3)
                .then(response => {
                    alert('修改密碼成功！請用新密碼重新登入');
                    // this.$router.push('./login');
                    // this.clearCookies();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        clearCookies() {
            // 取得目前的 cookie 字串
            let cookies = document.cookie;
            // 將 cookie 字串分割成每個 cookie
            let cookieArr = cookies.split("; ");
            // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
            for (let i = 0; i < cookieArr.length; i++) {
            let cookie = cookieArr[i];
            let eqPos = cookie.indexOf("=");
            let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = `${name}=;expires=Thu, 01 Jan 1970 00:00:00 GMT`;
            }
        },
    },
    components:{
        navbar,Accountsidebar
    },
    mounted(){
        this.localPORTRAIT = localStorage.getItem("portrait");

    },
}
</script>
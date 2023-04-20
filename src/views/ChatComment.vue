<template>
    <div class="comment" v-if="isLoggedIn">
      <label for="mail" class="f-label">
        <h4>回覆貼文</h4>
      </label>
      <textarea name="" id="tarea" cols="30" rows="10" class="f-text" placeholder="回覆貼文" v-model="message" ></textarea>
      <button type="button" class="btn-m btn-color-green" @click="sendComment">回覆</button>
    </div>
</template>


<script>
export default {
    data(){
        return{
          message:'',
          USER_ID:'',
          PORTRAIT:"",
          NICKNAME:"",
          CREATE_TIME:"",
          CHATID:"",
          currentDateTime:'',
          isLoggedIn: false,        
        }

    },
    methods:{
        sendComment(e){

             const data = JSON.stringify({
                USER_ID:this.USER_ID,
                PORTRAIT:this.PORTRAIT,
                NICKNAME:this.NICKNAME,
                CREATE_TIME:this.CREATE_TIME,
                CONTENT:this.message,

              })
           
            const formData = new FormData()
            formData.append('USER_ID', this.USER_ID)
            formData.append('CREATE_TIME', this.CREATE_TIME)
            formData.append('CONTENT', this.message)
            formData.append('CHAT_ID', this.CHATID)    

            axios
                .post('http://localhost/TGD104G1/public/API/addComment.php', formData)
                // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
                .then(response => {
                    // this.jsonData = response.data;
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });



            this.$emit("message" , data)
            // console.log(this.message);
            this.message = ''
            
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
        
    },
    mounted(){
      const cookieValue = this.getCookieValue('account');
    
        // 判斷 Cookie 是否存在
        if (cookieValue !== null) {
          this.isLoggedIn = true;
        } else {
          this.isLoggedIn = false;
        };

      // const Id = this.getCookieValue('id');
      // const nickname = this.getCookieValue('nickname');
      // const portrait = this.getCookieValue('portrait');
      this.USER_ID = this.getCookieValue('id');
      this.NICKNAME = this.getCookieValue('nickname');
      this.PORTRAIT = localStorage.getItem('portrait');
      this.CHATID = this.$route.params.Id; 

      const currentDate = new Date();
      console.log(currentDate);
      this.currentDateTime = currentDate.toLocaleString();
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth() + 1;
      const date = currentDate.getDate();
      const hours = currentDate.getHours();
      const minutes = currentDate.getMinutes();

      // this.currentDateTime = `${year}-${month}-${date} ${hours}:${minutes}:${seconds}`;
      this.CREATE_TIME = `${year}-${month}-${date} ${hours}:${minutes}`;
    }
}
</script>
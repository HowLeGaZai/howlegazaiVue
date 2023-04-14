<template>
    <div class="comment">
      <label for="mail" class="f-label">
        <h4>回覆貼文</h4>
      </label>
      <textarea name="" id="tarea" cols="30" rows="10" class="f-text" placeholder="回覆貼文" v-model="message"></textarea>
      <button type="button" class="btn-m btn-color-green" @click="sendComment">回覆</button>
    </div>
</template>


<script>
export default {
    data(){
        return{
            message:'',
             USER_ID:2,
          USER_PORTRAIT:"user_pic.png",
          USER_NICKNAME:"李奧",
          CREATE_TIME:"2023-04-12",
        
        }

    },
    methods:{
        sendComment(e){

             const data = JSON.stringify({
                USER_ID:this.USER_ID,
                USER_PORTRAIT:this.USER_PORTRAIT,
                USER_NICKNAME:this.USER_NICKNAME,
                CREATE_TIME:this.CREATE_TIME,
                CONTENT:this.message,

                
              })

            this.$emit("message" , data)
            // console.log(this.message);
            this.message = ''
            
        },
        
    }
}
</script>
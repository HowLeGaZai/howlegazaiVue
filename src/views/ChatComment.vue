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
        }

    },
    methods:{
        sendComment(e){
            this.$emit("message" , this.message)
            // console.log(this.message);
            this.message = ''
            
        }
    }
}
</script>
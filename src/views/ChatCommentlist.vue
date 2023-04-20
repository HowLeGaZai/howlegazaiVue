<template>
    <div class="comment-list">
        <div class="chat-commit" v-for="(comment,index) in jsonData" :key="index">
        <div class="chat-commit-title"> 
            <div class="image user_pic"> 
                <img class="image event_pic" :src="comment.PORTRAIT" alt="">
            </div>
            <h5 class="commit-user">{{comment.NICKNAME}}</h5>
            <h5 class="commit-date">{{getFormatDate(comment.CREATE_TIME)}}</h5>
        </div>
        <div class="chat-commit-content">
          {{comment.CONTENT}}
        </div>

      </div>
    </div>
</template>


<script>
import axios from 'axios';
import { formatDate } from "../plugin/date";

export default {
  props:["sendToList"],
    data(){
        return{
        jsonData: [],
        inputValFromChild: [{}],
        chatid:'',
        }
    },
    mounted(){
      this.chatid = this.$route.params.Id;
      // console.log("asdsdasd", this.chatid)
      const formData = new FormData()
          formData.append('chatID', this.chatid)
      axios
        .post('http://localhost/TGD104G1/public/API/commentList.php', formData)
        .then(response => {
            this.jsonData = response.data;
            console.log('abc',response.data);
        })
        .catch(error => {
            console.log(error);
        });

        // this.propData =  this.sendToList;
        // console.log('123456'+ this.propData);
        // this.addToArray();
    },
    watch:{
        sendToList:{
          // immediate: true,
          handler(newVal) {
            // 將新的list值添加到myList數組中
          // dataSavetoObject(newVal);
            // console.log("新輸入的留言為");
            // console.log("abc"+newVal);
            // console.log(newVal);
            // this.inputValFromChild = JSON.parse(newVal);
            let data2 = JSON.parse(newVal);
            // let data3 = {"0":data2.USER_ID,"1": data2.USER_PORTRAIT,"2":data2.USER_NICKNAME,"3":data2.CREATE_TIME,"4":data2.CONTENT};
            // console.log( data2);
            console.log(data2);
            this.jsonData.push(data2);

            const formData = new FormData()
            
            
            
            //  console.log(this.jsonData);
          }
        }
    },
    methods:{
      getFormatDate(val) {
        return formatDate(val);
      },
      // addToArray(){
      //   this.jsonData.push(this.propData);
      //   // console.log(this.jsonData);
      // }
    }
}
</script>
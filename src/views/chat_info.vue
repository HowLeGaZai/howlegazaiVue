<template>
<navbar></navbar>
     <main class="chat_info">
        <router-link to="/chat" custom v-slot="{ navigate }">
            <button class="btn-prepage font-green" @click="navigate" role="link">
              <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】
            </button>
        </router-link>
  
    <div class="chat_info_topic">
      <h1>{{chatarticle.TITLE}}</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img :src="chatarticle.PORTRAIT" alt="" class="user_pic" />
        </div>
        <h4>{{chatarticle.NICKNAME}}</h4>
        <h4>{{getFormatDate(chatarticle.CREATE_TIME)}}</h4>
      </div>
      <div class="tag tag-orange tag-mini">{{chatarticle.CATEGORY}}</div>
    </div>
    <div class="chat-article chat-article-new" v-html="chatarticle.CONTENT"></div>

    <chat-comment   @message="addComment" @commentAdded="refreshCount"></chat-comment>
  
  <div class="chat_area">
    <h4 >{{countnum}}則留言</h4>
  </div>

  <chat-commentlist :sendToList="data"></chat-commentlist>

    <div class="confirm-btn">
         <router-link to="/chat" custom v-slot="{ navigate }">
                <button class="btn-m btn-color-green" @click="navigate" role="link">返回討論區</button>
        </router-link>
    </div>



  </main>
  <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';
import ChatComment from './ChatComment.vue';
import ChatCommentlist from './ChatCommentlist.vue';
import { formatDate } from "../plugin/date";


export default {
  components: {
      navbar,Footer,ChatComment,ChatCommentlist,
    },

    data(){
      return{
        // message:'',
        data:[],
        chatID:'',
        chatarticle:{},
        countnum:'',
      }
    },
    methods:{
      addComment(data){
          // console.log(message);
          this.data = data;
      },
      getFormatDate(val) {
        return formatDate(val);
      },
      refreshCount() {
        const formData = new FormData()
        formData.append('chatID', this.chatID)
        axios
          .post("http://localhost/TGD104G1/public/API/countcomment.php", formData)
          .then((response) => {
            this.countnum = response.data[0][0];
          })
          .catch((error) => {
            console.error(error);
          });
      }
    },

    beforeMount() {
      this.chatID = this.$route.params.Id;

      const chatdata = new FormData();
      chatdata.append('routeid', this.chatID);

    axios
      .post("http://localhost/TGD104G1/public/API/chatcontent.php", chatdata)
      .then((response) => {
        // const chatarticle = response.data;
        this.chatarticle = response.data[0];
         console.log(response.data)
        // console.log(this.chatarticle);
      })
      .catch((error) => {
        console.error(error);
      });
     
  },
  mounted(){
     const formData = new FormData()
          formData.append('chatID', this.chatID)
    axios
      .post("http://localhost/TGD104G1/public/API/countcomment.php", formData)
      .then((response) => {
        // const chatarticle = response.data;
        // this.countnum = response.data;
        // console.log(response.data[0][0]);
         this.countnum = response.data[0][0];
      })
      .catch((error) => {
        console.error(error);
      });
  },
    
};
</script>

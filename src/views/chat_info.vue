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
          <!-- <img :src="chatarticle.PORTRAIT" alt="" class="user_pic" /> -->
          <img :src="chatarticle.PORTRAIT != ''? chatarticle.PORTRAIT :require(`@/assets/img/user_pic.png`)" alt="" class="user_pic" />


        </div>
        <h4>{{chatarticle.NICKNAME}}</h4>
        <h4>{{getFormatDate(chatarticle.CREATE_TIME)}}</h4>
      </div>
      <div :class="['tag', 'tag-mini', addClass(chatarticle.CATEGORY)]">{{chatarticle.CATEGORY}}</div>
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

import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
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
      addClass(category) {
        return {
          "tag-main": category === "所有話題",
          "tag-pink": category === "美食討論",
          "tag-orange": category === "二手交易",
          "tag-blue": category === "里民閒聊",
          "tag-sky": category === "團購討論",
          "tag-green ": category === "我要抱怨",
          "tag-yellow": category === "其他",
        };
      },
      addComment(data){
          // console.log(message);
          this.data = data;
          this.$forceUpdate();
      },
      getFormatDate(val) {
        if(!val){
          return "";
        }
        return formatDate(val);
      },
      refreshCount() {
        const formData = new FormData()
        formData.append('chatID', this.chatID)
        axios
          .post("http://localhost/TGD104G1/public/API/countcomment.php", formData)
          .then((response) => {
            this.countnum = response.data[0][0];
            // location.reload();
            this.$router.go(0); 
            
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

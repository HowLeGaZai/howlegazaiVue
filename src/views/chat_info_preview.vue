<template>
  <div class="preview_toolbar">
    <p>
      **** 此為預覽頁面，請記得點擊<a
        @click="publish"
        class="a-select"
        >發布討論區文章</a
      >完成刊登，或<a @click="goback">返回上一頁</a> ****
    </p>
  </div>
  <navbar></navbar>
  <main class="chat_info">
    <div class="chat_info_topic">
      <h1>{{ title }}</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img :src="portrait != ''? portrait :require(`@/assets/img/user_pic.png`)" alt="" class="user_pic" />
        </div>
        <h4>{{usernickname}}</h4>
        <h4>發布日期：5小時前</h4>
      </div>
      <div :class="['tag', addTagClass(type)]">{{ type }}</div>
    </div>
    <div class="chat-article" v-html="tinymceContent"></div>
  </main>

  <Footer></Footer>
</template>
    
    <script>
import navbar from "../components/navbar.vue";
import Footer from "../components/Footer.vue";
import ChatComment from "./ChatComment.vue";
import ChatCommentlist from "./ChatCommentlist.vue";
// import TinymceContent from '@/components/TinymceContent.vue';

export default {
  components: {
    navbar,
    Footer,
    ChatComment,
    ChatCommentlist,
  },

  data() {
    return {
      title: "",
      type: "",
      tinymceContent: "",
      PictureCropChatbanner: "",
      textContent: "",
      usernickname: "",
      portrait: "",
      userid: "",
      routerid: "",
    };
  },
  methods: {
    getFormatDate(val) {
      return formatDate(val);
    },
    addComment(data) {
      // console.log(message);
      this.data = data;
    },
    addTagClass(i) {
      switch (i) {
        case "美食討論":
          return "tag-pink";
        case "二手交易":
          return "tag-orange";
        case "里民閒聊":
          return "tag-blue";
        case "團購討論":
          return "tag-sky";
        case "我要抱怨":
          return "tag-green";
        case "其他":
          return "tag-yellow";
      }
    },

    getCookieValue(cookieName) {
      // 讀取指定名稱的 Cookie 值
      const cookieStr = decodeURIComponent(document.cookie);
      const cookies = cookieStr.split("; ");
      for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split("=");
        if (cookie[0] === cookieName) {
          return cookie[1] || null;
        }
      }
      return null;
    },
    publish() {
      // const picornot = this.PictureCropChatbanner;
      // if(!picornot){
      //   this.PictureCropChatbanner = "http://localhost/TGD104G1/src/assets/img/default.jpg";
      // }

      const chatform = new FormData();

      chatform.append("category", this.type);
      chatform.append("title", this.title);
      chatform.append("content", this.tinymceContent);
      chatform.append("pic", this.PictureCropChatbanner);
      chatform.append("text", this.textContent);
      chatform.append("userid", this.userid);
      chatform.append("routerid", this.routerid);

      axios
        .post("http://localhost/TGD104G1/public/API/publishchat.php", chatform)
        .then((response) => {
          // this.jsonData = response.data;
          console.log(response.data);
          const Id = this.$route.params.Id;
          this.$router.push({ name: "chat_info", params: { Id: Id } });
          sessionStorage.clear();
        })
        .catch((error) => {
          console.log(error);
        });

      console.log("載入axios");
    },
    goback(){
      const Id = this.$route.params.Id;
      this.$router.push({ name: "chat_new", params: { Id: Id } });
    },
  },

  mounted() {
    this.title = sessionStorage.getItem("form-title");
    this.type = sessionStorage.getItem("form-type");
    this.tinymceContent = sessionStorage.getItem("form-tinymceContent");
    this.PictureCropChatbanner = sessionStorage.getItem(
      "form-PictureCropChatbanner"
    );

    this.usernickname = this.getCookieValue("nickname");
    this.userid = this.getCookieValue("id");
    this.portrait = localStorage.getItem("portrait");
    this.routerid = this.$route.params.Id;
    this.textContent = this.tinymceContent
      .replace(/(<([^>]+)>)/gi, "")
      .replace(/&[^;]+;/g, "");
  },
};
</script>
    
    
    
    
    
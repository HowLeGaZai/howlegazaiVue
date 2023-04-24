<template>
  <navbar></navbar>

  <main class="news_info">
    <button class="btn-prepage font-green" onclick="location.href='#/news'">
      <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】</button>
    <div class="news_info_topic">
      <h1>{{ newsarticle.TITLE }}</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img :src="newsarticle.PORTRAIT" alt="" class="user_pic" />
        </div>
        <h4>{{ newsarticle.FULLNAME }}里長</h4>
        <h4>發佈日期：{{ getFormatDate(newsarticle.CREATE_TIME) }}</h4>
      </div>
      <div :class="['tag', addTagClass(newsarticle.CATEGORY)]">{{ newsarticle.CATEGORY }}</div>
    </div>
    <div class="news-article">
      <!-- img的容器設定為原大小的95% -->
      <p class="news-article-content" v-html="newsarticle.CONTENT">
      
      </p>
      <!-- <div class="news-img">
        <img src="../assets/img/new_info_pic.png" alt="">
      </div> -->


    </div>


    <div class="news-btn-section">
      <button class="btn-news btn-color-white"><i class=" bi bi-caret-left-fill font-green"></i>上一則</button>
      <button class="btn-news btn-color-white">下一則<i class=" bi bi-caret-right-fill font-green"></i></button>
    </div>

  </main>
  <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';
import { formatDate } from "../plugin/date";

export default {
  components: {
    navbar, Footer,
  },

  data() {
    return {
      newsdata: [],
      newsID: '',
      newsarticle: {},
    }
  },


  beforeMount() {
    // this.newsID = this.$route.params.Id;
    // console.log('123',this.$route.params.Id);

    const newsdata = new FormData();
    newsdata.append('routeid', this.$route.params.Id);

    axios.post(`${process.env.VUE_APP_AJAX_URL}news_content.php`, newsdata)
      .then(response => {
        this.newsarticle = response.data[0];
        console.log("1111");
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
      })



  },

  methods: {
    getFormatDate(val) {
      return formatDate(val);
    },

    addTagClass(category) {
      return {
        "tag-main": category === "全部消息",
        "tag-orange": category === "公告",
        "tag-pink": category === "宣導",
        "tag-yellow": category === "里民服務",
        "tag-blue": category === "新聞分享",
        "tag-green": category === "會議記錄",
      }
    },


  }
  }
</script>
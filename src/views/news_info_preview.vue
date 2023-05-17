<template>
  <div class="preview_toolbar">
    <p>
      **** 此為預覽頁面，請記得點擊<a @click="publishNews" class="a-select">發布最新消息</a>完成刊登，或<a @click="goback"
        class="a-select">返回上一頁</a> ****
    </p>
  </div>
  <navbar></navbar>

  <main class="news_info">
    <!-- <button class="btn-prepage font-green" onclick="location.href='#/news'">
      <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】</button> -->
    <div class="news_info_topic">
      <h1>{{ title }}</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img src="../assets/img/admin_icon.png" alt="" class="user_pic" />
        </div>
        <h4>鄭成功 里長</h4>
        <h4>發佈 日期：2022-01-01</h4>
      </div>
      <div :class="['tag tag-mini', addTagClass(category)]">{{ category }}</div>
    </div>
    <div class="news-article">

      <p class="news-article-content" v-html="content">

      </p>
      <!-- <div class="news-img">
        <img src="../assets/img/new_info_pic.png" alt="">
      </div> -->


    </div>


    <!-- <div class="news-btn-section">
      <button class="btn-news btn-color-white"><i class=" bi bi-caret-left-fill font-green"></i>上一則</button>
      <button class="btn-news btn-color-white">下一則<i class=" bi bi-caret-right-fill font-green"></i></button>
    </div> -->

  </main>
  <Footer></Footer>
</template>

<script>

import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
import { formatDate } from "../plugin/date";
import axios from 'axios';


export default {
  components: {
    navbar, Footer,
  },

  data() {
    return {
      newsdata: [],
      searchData: [],
      newsID: '',

      // createTime: Date().getTime(),
      category: '',
      title: '',
      pic: '',
      content: '',
      routerid: '',
      adminid: '1',
      // fullname:'',




    }
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
    publishNews() {
      const routerid = this.$route.params.Id;
      // console.log(routerid);
      const searchid = new FormData();
      searchid.append('routerid', routerid);

      axios
        .post('http://localhost/TGD104G1/public/API/check_duplicate_news.php', searchid)
        .then(response => {
          this.searchData = response.data;
          // console.log(this.searchData);

          if (this.searchData !== "not_duplicate") {
            // console.log('資料庫有這筆');
            const formData= new FormData();
            formData.append('routerid', this.routerid);
            formData.append('title', this.title);
            formData.append('category', this.category);
            formData.append('content', this.content);
            formData.append('pic', this.pic);
            axios
            .post('http://localhost/TGD104G1/public/API/newsEdit.php',formData)
            .then(response => {
              alert("編輯成功");
              console.log(this.searchData);
              sessionStorage.clear();
                
            })
            .catch(error => {
                console.log(error);
            });

            this.$router.push('/backend_news');


          } else { 
            //check後routerid後資料庫有資料，

            const formData= new FormData();
            formData.append('routerid', this.routerid);
            formData.append('title', this.title);
            formData.append('category', this.category);
            formData.append('content', this.content);
            formData.append('pic', this.pic);
            formData.append('adminid', this.adminid);
            axios
            .post('http://localhost/TGD104G1/public/API/newsAdd.php',formData)
            .then(response => {
              alert("新增成功");
              sessionStorage.clear();

            })
            .catch(error => {
                console.log(error);
            });

            this.$router.push('/backend_news');

          }


        })
        .catch(error => {
          console.log(error);
        });


    },

    goback() {
      const Id = this.$route.params.Id;
      this.$router.push({ name: "backend_news_add", params: { Id: Id } });
    },

  },

  // 把sessionStorage值取出
  mounted() {

    this.routerid = this.$route.params.Id;

    this.title = sessionStorage.getItem("news-title");
    this.category = sessionStorage.getItem("news-category");
    this.content = sessionStorage.getItem("news-content");
    this.pic = sessionStorage.getItem("news-pic");


    // this.admin_id = this.getCookieValue("id"); //里長資料cookie
    // this.admin_portrait = this.getCookieValue("portrait"); //里長頭像cookie





  },
}
</script>
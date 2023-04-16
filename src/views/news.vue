<template>
  <navbar></navbar>

  <main class="news_page">
    <h1>最新消息</h1>
    <div class="search-bar">
      <input type="text"  v-model.lazy.trim="searchNews" class="f-text f-round" placeholder=""
        style="font-family:bootstrap-icons"/>

      <button class="btn-m btn-color-green" @click="postsearch">搜尋</button>
    </div>
    <div class="desktop-filter" id="news-desktop-filter">
      <div class="tag tag-btn tag-main tag-btn-selected">全部消息</div>
      <div class="tag tag-orange tag-btn">公告</div>
      <div class="tag tag-pink tag-btn">宣導</div>
      <div class="tag tag-yellow tag-btn">里民服務</div>
      <div class="tag tag-blue tag-btn">新聞分享</div>
      <div class="tag tag-green tag-btn">會議記錄</div>
      <!-- <div class="tag tag-sky opacity-6">經費報告</div> -->
    </div>
    <div class="mobile-filter">
      <label for="chattype" class="f-label">分類</label>
      <select name="" id="chattype" class="f-select">
        <option value="1">全部消息</option>
        <option value="2">公告</option>
        <option value="3">宣導</option>
        <option value="4">里民服務</option>
        <option value="5">新聞分享</option>
        <option value="6">會議記錄</option>
        <!-- <option value="7">經費報告</option> -->
      </select>
    </div>

    <div class="news_content">

      <!-- <news-list></news-list> -->
      <!-- <news-list v-for="news in filterNews" :key="news.id"></news-list> -->
      <!-- ===== newslist_components ===== -->

      <a href="#" v-for="(news,index) in newsdata" :key="index">
        <!-- <a href="#" v-for="news in filterNews" :key="news"> -->
      <!-- <a href="#" v-for="news in filterNews" :key="news.news"> -->
        <article class="news_item">
          <section>
            <section class="article_news">
              <div :class="['tag', addTagClass(news.CATEGORY)]">{{ news.CATEGORY }}</div>

              <p class="rwd-newsdate">{{getFormatDate(news.CREATE_TIME)}}</p>
              <h2>{{ news.TITLE }}</h2>
              <h5>{{ news.CREATE_TIME }}</h5>
            </section>
            <div class="image list_pic">
              <!-- Vue無法抓取null的屬性做判斷，這裡直接將找不到的值轉換成字串null再做更替預設圖片 -->
              <img :src= "(news.PIC && news.PIC !== 'null') ? require(`@/assets/img/${news.PIC }`) : require(`@/assets/img/news_default.jpg`)" alt="">
            </div>
          </section>
        </article>
      </a>
 





    </div>

    <div class="watch-more">
      <button type="button" class="btn-m btn-color-greenborder">看更多</button>
    </div>

  </main>

  <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';
import NewsList from '../components/NewsList.vue';
import { formatDate } from '../plugin/date';



export default {
  components: {
    navbar,
    Footer,
    NewsList

  },

  data() {
    return {
      searchNews: '', // input的搜尋輸入內容
      // newsData:[],// 搜尋結果
      newsdata: [],
      // news2:[],
    }
  },
  methods: {
    // 變換tag顏色與樣式
    addTagClass(i) {
      switch (i) {
        case "公告": return "tag-orange";
        case "宣導": return "tag-pink";
        case "里民服務": return "tag-yellow";
        case "新聞分享": return "tag-blue";
        case "會議記錄": return "tag-green";
      }
    },

    // 自動撈取最新消息
     getnews(){
       axios.post('http://localhost/TGD104G1/public/API/show_all_news.php')
      .then(response => {
        this.newsdata= response.data;
        console.log(this.newsdata);
       })
       .catch(error => {
         console.log(error);
       });

    
    },
  

    //搜尋最新消息
    postsearch(){

      const formdata = new FormData()
      formdata.append('searchNews',this.searchNews) 
      console.log(this.searchNews);
      axios.post('http://localhost/TGD104G1/public/API/search_news.php', formdata )// searchNews:this.searchNews
      .then(response => {
        this.newsdata=response.data;
        // console.log('123',response.data);
        // console.log('123');
       })
       .catch(error => {
         console.log(error);
       });

    },

    //轉換日期格式
    getFormatDate(val){
      return formatDate(val);
    },


    
  },

  computed:{
    //搜尋函式
    // filterNews(){
    //   return this.news.filter(searchResult => searchResult.news.match(this.searchNews))
    // }
    
  },


  mounted() {
    
    this.getnews();

    var desktopfilter = document.getElementById("news-desktop-filter");
    var btns = desktopfilter.getElementsByClassName("tag-btn");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName(" tag-btn-selected");

        if (current.length > 0) {
          current[0].className = current[0].className.replace(" tag-btn-selected", "");
        }
        this.className += " tag-btn-selected";
      });
    };

    // this.postsearch();
  }



}



</script>
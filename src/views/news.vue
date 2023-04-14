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

      <a href="#" v-for="(news, index) in news" :key="index">
        <!-- <a href="#" v-for="news in filterNews" :key="news"> -->
      <!-- <a href="#" v-for="news in filterNews" :key="news.news"> -->
        <article class="news_item">
          <section>
            <section class="article_news">
              <div :class="['tag', addTagClass(news.CATEGORY)]">{{ news.CATEGORY }}</div>

              <p class="rwd-newsdate">{{ news.CREATE_TIME }}</p>
              <h2>{{ news.TITLE }}</h2>
              <h5>{{ news.CREATE_TIME }}</h5>
            </section>
            <div class="image list_pic">
              <img :src="require(`@/assets/img/${news.PIC}`)" alt="">
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

export default {
  components: {
    navbar,
    Footer,
    NewsList

  },

  data() {
    return {
      searchNews: '', // input的搜尋輸入內容
      NewsData:[],// 搜尋結果
      news: [
        {
          "CATEGORY": "公告",
          "CREATE_TIME": "2023-03-02",
          "TITLE": "清明期間 大湖里第一公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "宣導",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "大湖里反詐騙宣導：為避免輕易上當，請撥165反詐騙電話",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "里民服務",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "新聞分享",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "會議記錄",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
      ]
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

    //搜尋最新消息
    postsearch(){

      const formdata = new FormData()
      formdata.append('searchNews',this.searchNews) 
      console.log(this.searchNews);
      axios.post('http://localhost/howlegazaiVue2/public/API/search_news.php', formdata )// searchNews:this.searchNews
      .then(response => {
        console.log(response.data);
        // console.log('123');
       })
       .catch(error => {
         console.log(error);
       });



    }


    
  },

  computed:{
    //搜尋函式
    // filterNews(){
    //   return this.news.filter(searchResult => searchResult.news.match(this.searchNews))
    // }
    
  },


  mounted() {
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
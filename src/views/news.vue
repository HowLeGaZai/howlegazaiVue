<template>
  <navbar></navbar>

  <main class="news_page">
    <h1>最新消息</h1>
    <div class="search-bar">
      <input type="text" v-model.lazy.trim="searchNews" class="f-text f-round" placeholder=""
        style="font-family:bootstrap-icons" />

      <button class="btn-m btn-color-green" @click="postsearch">搜尋</button>
    </div>
    <div class="desktop-filter" id="news-desktop-filter">
      <div class="tag tag-btn tag-main tag-btn-selected" :class="{ 'tag-btn-selected': selectedCategory === '全部消息'}"
        @click="selectedCategory = '全部消息'" value="">全部消息</div>
      <div class="tag tag-orange tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '公告' }"
        @click="selectedCategory = '公告'" value="公告">公告</div>
      <div class="tag tag-pink tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '宣導' }"
        @click="selectedCategory = '宣導'" value="宣導">宣導</div>
      <div class="tag tag-yellow tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '里民服務' }"
        @click="selectedCategory = '里民服務'" value="公告">里民服務</div>
      <div class="tag tag-blue tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '新聞分ㄏㄧㄤˇ' }"
        @click="selectedCategory = '新聞分享'" value="新聞分享">新聞分享</div>
      <div class="tag tag-green tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '會議記錄' }"
        @click="selectedCategory = '會議記錄'" value="會議記錄">會議記錄</div>
      <!-- <div class="tag tag-sky opacity-6">經費報告</div> -->
    </div>
    <div class="mobile-filter">
      <label for="chattype" class="f-label">分類</label>
      <select name="" id="newstype" class="f-select" v-model="selectedCategory">
        <option value="全部消息">全部消息</option>
        <option value="公告">公告</option>
        <option value="宣導">宣導</option>
        <option value="里民服務">里民服務</option>
        <option value="新聞分享">新聞分享</option>
        <option value="會議記錄">會議記錄</option>
      </select>
    </div>

    <div class="news_content">

      <!-- <news-list></news-list> -->
      <!-- <news-list v-for="news in filterNews" :key="news.id"></news-list> -->
      <!-- ===== newslist_components ===== -->

      <a href="#" v-for="(news, index) in displayedTopics" :key="index" v-show="index < num">
        <!-- <a href="#" v-for="news in filterNews" :key="news"> -->
        <!-- <a href="#" v-for="news in filterNews" :key="news.news"> -->
        <article class="news_item">
          <section>
            <section class="article_news">
              <div :class="['tag', addTagClass(news.CATEGORY)]">{{ news.CATEGORY }}</div>

              <p class="rwd-newsdate">{{ getFormatDate(news.CREATE_TIME) }}</p>
              <h2>{{ news.TITLE }}</h2>
              <h5>{{ getFormatDate(news.CREATE_TIME) }}</h5>
            </section>
            <div class="image list_pic">
              <!-- Vue無法抓取null的屬性做判斷，這裡直接將找不到的值轉換成字串null再做更替預設圖片 -->
              <img
                :src="(news.PIC && news.PIC !== 'null') ? require(`@/assets/img/${news.PIC}`) : require(`@/assets/img/default.jpg`)"
                alt="">
            </div>
          </section>
        </article>
      </a>






    </div>

    <div class="watch-more">
      <button type="button" class="btn-m btn-color-greenborder" id="showmore" v-if="num < this.newsdata.length"
        @click="showmore">看更多</button>
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
      newsdata: [], //所有的最新消息
      num: 8,//預設單頁的顯示最大筆數
      selectedCategory: '全部消息',
      categories: [
        '全部消息',
        '公告',
        "宣導",
        "里民服務",
        "新聞分享",
        "會議記錄",
      ],

    }
  },
  methods: {
    // 變換tag顏色與樣式
    addTagClass(category) {
      return {
        "tag-main": category === "全部消息",
        "tag-orange": category === "公告",
        "tag-pink": category === "宣導",
        "tag-yellow": category === "里民服務",
        "tag-blue": category === "新聞分享",
        "tag-green": category === "會議記錄",
      };
    },

    // 自動撈取最新消息
    getnews() {
      axios.post('http://localhost/TGD104G1/public/API/show_all_news.php')
        .then(response => {
          this.newsdata = response.data;
          console.log(this.newsdata);
        })
        .catch(error => {
          console.log(error);
        });


    },


    //搜尋最新消息
    postsearch() {

      const formdata = new FormData()
      formdata.append('searchNews', this.searchNews)
      console.log(this.searchNews);
      axios.post('http://localhost/TGD104G1/public/API/search_news.php', formdata)// searchNews:this.searchNews
        .then(response => {
          this.newsdata = response.data;
          // console.log('123',response.data);
          // console.log('123');
        })
        .catch(error => {
          console.log(error);
        });

    },
    //轉換日期格式
    getFormatDate(val) {
      return formatDate(val);
    },

    //點選看更多
    showmore() {
      this.num = this.num + 5;
      console.log(123, this.num.length);
      if (this.num >= this.num.length) {
        // alert('顯示最多');
        let lookmore = document.getElementById("showmore");
        // console.log(lookmore);
        lookmore.style.display = "none";
      } else {
      }
 
    }



  },

  computed: {
    //取得newsdata後判斷selectedCategory種類進行資料渲染
    displayedTopics() {
      if (this.selectedCategory === '全部消息') {
        return this.newsdata;
      } else {
        return this.newsdata.filter(
          (newsdata) => newsdata.CATEGORY === this.selectedCategory
        );
      }
    },

  },


  mounted() {

    this.getnews();

    var desktopfilter = document.getElementById("news-desktop-filter");
    var btns = desktopfilter.getElementsByClassName("tag-btn");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName(" 、tag-btn-selected");

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
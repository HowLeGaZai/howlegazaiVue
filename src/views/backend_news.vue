<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">

      <backCalender></backCalender>

      <section class="container-main">
        <!------- 補這裡：後台側欄選單 ------->
        <BackLeftNav></BackLeftNav>
        <!------- 補這裡：後台側欄選單 ------->

        <section class="section_right padding0">
          <div class="nav_right w100percentage padding30">
            <!--各頁資料放這裡 -->

            <!-- 我的sass寫在 _back_table_scss -->
            <div class="w90percentage accounttable">
              <h1>最新消息管理</h1>
              <div class="displayflex justifycontent">
                <div class="displayflex textalignleft ">
                  <div class="marginright20">
                    <label for="selecte" class="f-label">類別</label>
                    <select name="" id="selecte" class="f-select" v-model="selectedCategory">
                      <option value="">-全部-</option>
                      <option value="公告">公告</option>
                      <option value="宣導">宣導</option>
                      <option value="里民服務">里民服務</option>
                      <option value="新聞分享">新聞分享</option>
                      <option value="會議記錄">會議記錄</option>
                    </select>
                  </div>
                  <div>
                    <label for="date" class="f-label">發布日期</label>
                    <select name="" id="date" class="f-select" v-model="selectedDate">
                      <!-- <option value="">-選擇-</option> -->
                      <option value="">最新至最舊</option>
                      <option value="old">最舊至最新 </option>
                    </select>
                  </div>
                </div>
                <div class="displayflex margintop18">
                  <router-link :to="{ path: '/backend_news_add/' + id }">
                    <button type="button" class="btn-10-s btn-color-green">
                      <a href="#/backend_news_add"><i class="bi bi-plus-lg">新增消息</i> </a>
                    </button>
                  </router-link>

                  <!-- <button type="button" class="btn-10-s btn-color-green">
                <i class="bi bi-cloud-arrow-down-fill"></i>匯出資料
              </button> -->
                </div>

              </div>
              <div class="news-back-table">

                <table class=" back-table-3">

                  <tbody>
                    <tr>
                      <td>類別</td>
                      <td>消息標題</td>
                      <td>發布日期</td>
                      <td>置頂</td>
                      <td>編輯</td>
                      <td>上架</td>
                      <!-- <td>編輯</td>
                  <td>刪除</td> -->
                    </tr>
                    <tr v-for="(news, index) in filteredItems" :key="index" v-show="index < num">
                      <td>{{ news.CATEGORY }}</td> <!-- 發布類別 -->
                      <td>{{ news.TITLE }}</td> <!-- 標題 -->
                      <td>{{ getFormatDate(news.CREATE_TIME) }}</td> <!-- 時間 -->

                      <!-- 置頂 -->
                      <td><label class="f-checkbox">
                          <input type="checkbox" :checked="parseInt(news.TOP) === 1" @click="newsmanage(news, index, 'TOP')">
                          <span class="checkmark newscheck"></span>
                        </label></td>
                      <!-- 編輯 -->

                      <td> 
                        <router-link :to="{ path: '/backend_news_add/' + this.filteredItems[index][1] }">
                        <button type="button" class="btn-icon">
                          <i class="bi bi-pencil-square btn-font-color-green"></i>
                        </button>
                      </router-link>
                      </td>

                      <!-- 下架 -->
                      <td>
                         <!-- <button type="button" class="btn-icon">
                          <i class="bi bi-x-circle-fill btn-font-color-green"
                            @click="newsmanage(news, index, 'STATUS')"></i>
                        </button> -->
                        <label class="switch">
                        <input type="checkbox" :checked="parseInt(news.STATUS) === 1" @click="newsmanage(news, index, 'STATUS')">
                        <span class="slider"></span>
                      </label>
                      
                      
                      </td>
                    </tr>
                  </tbody>

                </table>

              </div>
              <!-- <ul class="btn-page-block">
                <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
                <li><button class="btn-page btn-color-white">1</button></li>
                <li><button class="btn-page btn-color-green">2</button></li>
                <li><button class="btn-page btn-color-white">3</button></li>
                <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
              </ul> -->

          

            </div>


          </div>

          <!-- 992以下顯示內容 -->
          <div class="main rest-inf">
            不支援手機喔
          </div>

          <!--各頁資料放這裡 -->
        </section>
      </section>

    </main>
    <!------ 補這裡：不支援手機畫面 ------>
    <mobileNotSupport></mobileNotSupport>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>

  <Footer></Footer>

  <!-- </main> -->
</template>

<script>

import backendNavbar from '../components/backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';
import Footer from '../components/Footer.vue';
import { formatDate } from '../plugin/date';
import $ from 'jquery';



export default {
  components: {
    backendNavbar, Footer, backCalender, BackLeftNav,mobileNotSupport
  },
  data() {
    return {
      newsData: [],
      num: 12,
      id: new Date().getTime(),// 設當前時間的字符串為ID
      selectedCategory: '',
      selectedDate: '',
      
    }
  },

  //進頁面前檢查是否有存有routerid


  methods: {
    // 自動撈取最新消息
    getnews() {
      axios.post('http://localhost/TGD104G1/public/API/backend_news_show.php')
        .then(response => {
          this.newsData = response.data;

        })
        .catch(error => {
          console.log(error);
        });
    },

    getFormatDate(val) {
      return formatDate(val);
    },


    newsmanage(news, index, active) {

      // console.log(this.newsData[index]);
      // console.log(this.newsData[index][0]); //object的ID
      // const result =this.newsData[index][active] = this.newsData[index][active] === 1 ? 0 : 1;
      const result =this.filteredItems[index][active] = parseInt(this.filteredItems[index][active]) === 1 ? '0' : '1';
      
      
      // console.log([event])

      // console.log(this.newsData[index][0])
      // console.log(this.newsData[index][event]);

      const updateNews = new FormData();
      updateNews.append('newsid', this.filteredItems[index][0]); //object的ID
      updateNews.append('active', [active]); //object 觸發的事件
      updateNews.append('status', result); //判斷送入0或1
      console.log(updateNews);
      // newsdata.append('title', this.title);
      // console.log(news, index, event);

      axios.post('http://localhost/TGD104G1/public/API/manageNews.php',updateNews)
      .then(response => {
          // this.jsonData = response.data;
          console.log(response.data);
          alert("修改成功！")
          

        })
        .catch(error => {
          console.log(error);
        });

        // location.reload();

    },



  },


  computed: {

    filteredItems: function() {
      let filteredNews = this.newsData;
      // 類別篩選
      if (this.selectedCategory) {
        filteredNews = filteredNews.filter(newsData => {
          return newsData.CATEGORY === this.selectedCategory;
        });
      }
      // 日期排序
      if (this.selectedDate === '') {
        filteredNews = filteredNews.sort((a, b) => new Date(b.CREATE_TIME) - new Date(a.CREATE_TIME));
      } else if (this.selectedDate === 'old') {
        filteredNews = filteredNews.sort((a, b) => new Date(a.CREATE_TIME) - new Date(b.CREATE_TIME));
      }
      return filteredNews;
    }
  },
  mounted() {
    this.getnews();

  }

}


</script>
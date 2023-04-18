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
                    <!-- 設一個v-modele= selectedCategory  -->
                      <option value="">-全部-</option>
                      <option value="公告">公告</option>
                      <option value="宣導">宣導</option>
                      <option value="經費報告">經費報告</option>
                  </select>
              </div>
              <div>
                  <label for="date" class="f-label">發布日期</label>
                  <select name="" id="date" class="f-select" v-model="selectedDate">
                      <option value="">-選擇-</option>
                      <option value="new">最新至最舊</option>
                      <option value="old">最舊至最新 </option>
                      <!-- <option value="4">審核通過 </option> -->
                  </select>
              </div>
          </div>
          <div class="displayflex margintop18">
              <button type="button" class="btn-10-s btn-color-green">   
             <a href="#/backend_news_add"><i class="bi bi-plus-lg">新增消息</i>  </a>
              </button>
            

              <!-- <button type="button" class="btn-10-s btn-color-green">
                <i class="bi bi-cloud-arrow-down-fill"></i>匯出資料
              </button> -->
          </div>

     </div>
    <div class="">
      
        <table class=" back-table-3">
          
          <tbody>
              <tr>
                  <td>類別</td>
                  <td>消息標題</td>
                  <td>發布日期</td>
                  <td>置頂</td>
                  <td>編輯</td>
                  <td>下架</td>
                  <!-- <td>編輯</td>
                  <td>刪除</td> -->
              </tr>
              <tr v-for="item in filteredItems" :key="item.id">
                  <td>{{ item.category }}</td> <!-- 發布類別 -->
                  <td>{{ item.title }}</td>   <!-- 標題 -->
                  <td>{{ item.date }}</td> <!-- 時間 -->
                
                  <td><label class="f-checkbox">
                        <input type="checkbox" name="multichoice" checked>
                        <span class="checkmark newscheck"></span>
                      </label></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-pencil-square btn-font-color-green"></i>
                  </button></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                  </button></td>
              </tr>
           </tbody>
          
      </table> 
      
  </div>
  <ul class="btn-page-block">
    <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
    <li><button class="btn-page btn-color-white">1</button></li>
    <li><button class="btn-page btn-color-green">2</button></li>
    <li><button class="btn-page btn-color-white">3</button></li>
    <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
  </ul>

  <!-- 頁碼還沒寫完 -->

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
        <div :class="bodyClass" class="nosupport">
            <main>
                <section class="noSupport">
                    <a href="#">
                        <div>     
                            <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                            <h1>歹勢！後台目前不支援手機</h1>
                            <img class="cat" src="../assets/img/Cat.png" alt="">
                            <p>下班請休息，我們明天再忙！</p>
                        </div>
                    </a>
                </section>
            </main>
         
      </div>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>
  
  <Footer></Footer>
    
  <!-- </main> -->
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import Footer from './Footer.vue';

export default {
  data() {
    return {
      items: [
        { id: 1, category: '公告',title: '緯育里上課打8折', date: '2022-01-01' },
        { id: 2, category: '宣導',title: '偷米CEO創造出php新語法', date: '2022-01-02' },
        { id: 3, category: '經費報告',title: '里長女兒偷用公款買奶嘴',  date: '2022-01-03' },
        { id: 4, category: '公告',title: '其他網站的新功能正在努力開發中',   date: '2022-01-04' },
        // { id: 4, category: '公告',title: '其他網站的新功能正在努力開發中qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq',   date: '2022-01-04' },
      ],
      selectedCategory: '',
      selectedDate: '',
    }
  },
  computed: {
    filteredItems() {
      let filteredItems = this.items;
      if (this.selectedCategory) {
        filteredItems = filteredItems.filter((item) => item.category === this.selectedCategory);
      }
      if (this.selectedDate === 'new') {
        filteredItems = filteredItems.sort((a, b) => new Date(b.date) - new Date(a.date));
      } else if (this.selectedDate === 'old') {
        filteredItems = filteredItems.sort((a, b) => new Date(a.date) - new Date(b.date));
      }
      return filteredItems;
    },
  },
  components: {
      backendNavbar,Footer,backCalender,BackLeftNav
    },
    mounted() {
    $('#resizable').resizable({});
    $('#datepicker').datepicker({
        monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
          dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
          dateFormat: "yy/mm/dd",
          
          onSelect: function(){
            var selected = $(this).val();
            $('.selectedD').html(`日期:&nbsp` + selected);
            // console.log(selected);

            // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
            // console.log(dayNamesMin);
        }
    });
   


    
  },
 
  

  
}
</script>
<template>
   <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

      <section class="container-main">
        <BackLeftNav></BackLeftNav>

        <section class="section_right ">
          <!-- 新增活動 -->
          <div class="bk-activity-add">
            <h1>新增活動</h1>
            <div>
              <div class="activity-area1">
                <label for="activity-name" class="f-label">活動名稱</label>
                <input type="text" class="f-text" id="activity-name" placeholder="歡樂同樂摘櫻桃">
              </div>
              <!-- 分類下拉選單&活動banner-->
              <div class="activity-area2 input-grid-2">
                <!-- 分類下拉選單 -->
                <div class="f-input-2">
                  <label for="selecte" class="f-label">類別</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">-選擇-</option>
                    <option value="2">藝文</option>
                    <option value="3">旅遊</option>
                    <option value="4">健康</option>
                    <option value="5">其他</option>
                  </select>
                </div>
                <!-- 活動banner -->
                <div class="activity-banner f-input-2">
                  <label for="activity-banner" class="f-label">活動首圖</label>
                  <PictureCropActbanner @pic="sendnewspic" v-model="pic"></PictureCropActbanner>

                  <!-- <input type="file" class="f-file" id="activity-banner" placeholder="櫻桃活動宣傳圖.jpg"> -->
                </div>
              </div>

              <!-- 開放報名時間與活動舉辦時間-->
              <div class="activity-area3 input-grid-2">
                <div class="activity-reg f-input-2">
                  <label for="activity-reg" class="f-label activity-reg-1">開放報名時間</label>
                  <input type="date" class="f-text" id="activity-reg" placeholder="開放報名時間">
                  <p>至</p>
                  <input type="date" class="f-text" id="activity-reg" placeholder="截止報名時間">
                </div>

                <div class="activity-start f-input-2">
          
                  <label for="activity-start" class="f-label activity-reg-1">活動舉辦時間</label>
                  <input type="date" class="f-text" id="activity-reg" placeholder="活動開始時間">
                  <p>至</p>
                  <input type="date" class="f-text" id="activity-reg" placeholder="活動結束時間">
                </div>

              </div>

              <!-- 活動地點-->
              <div class="activity-area4">
                <div class="activity-located">
                  <label for="activity-located" class="f-label">活動地點</label>
                  <input type="text" class="f-text" id="activity-located" placeholder="花蓮市內湖鄉大湖里態勢路124號">
                </div>
              </div>


              <!-- 活動人數上限-->
              <div class="activity-membermax">
                <label for="activity-membermax" class="f-label">活動人數上限</label>
                <input type="number" class="f-text" id="activity-membermax" placeholder="100">
              </div>

              <!-- 活動費用-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動費用</label>
                <div class="activity-cost-block">
                  <input type="number" class="f-text" id="activity-cost" placeholder="3,400">
                  <label class="f-checkbox free-cost">免收取費用
                    <input type="checkbox" name="multichoice">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <!-- 活動說明內文-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動詳細內容</label>
                <textarea name="" id="" cols="30" rows="10" class="f-text" placeholder="這裡之後要改成文字編輯器"></textarea>

              </div>

              <!-- 送出按鈕-->
              <button type="submit" class="btn-m btn-color-gray" onclick="location.href='./activity.html'">取消</button>
              <!-- 是否有預覽頁-->
              <button type="submit" class="btn-m btn-color-green" onclick="location.href='./activity.html'">送出</button>

            </div>


          </div>



        </section>
      </section>






    </main>
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
  </div>
  <Footer></Footer>
</template>


<script>

import backendNavbar from './backendNavbar.vue';
import Footer from './Footer.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import PictureCropActbanner from "@/components/PictureCropActbanner.vue";




export default {
  components: {
    backendNavbar, Footer,backCalender,BackLeftNav,PictureCropActbanner

  },
   data() {
        return { 
          pic: '',
      
        };
        
    },
    methods: {
        sendnewspic(data) {
            this.pic = data;
        },
    },
  mounted() {
    
    

    // var btnContainer = document.getElementById("selected");
    // var btns = btnContainer.getElementsByClassName("timeslot");

    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function () {
    //     var current = document.getElementsByClassName("active");

    //     if (current.length > 0) {
    //       current[0].className = current[0].className.replace(" active", "");
    //     }
    //     this.className += " active";
    //   });
    // }

  },




}
</script>
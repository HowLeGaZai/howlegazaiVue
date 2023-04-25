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
                <input type="text" class="f-text" id="activity-name" placeholder="歡樂同樂摘櫻桃" v-model="activity_name">
              </div>
              <!-- 分類下拉選單&活動banner-->
              <div class="activity-area2 input-grid-2">
                <!-- 分類下拉選單 -->
                <div class="f-input-2">
                  <label for="selecte" class="f-label" >類別</label>
                  <select name="" id="selecte" class="f-select" v-model="category">
                    <option value="">-選擇-</option>
                    <option value="藝文">藝文</option>
                    <option value="旅遊">旅遊</option>
                    <option value="健康">健康</option>
                    <option value="其他">其他</option>
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
                  <input type="date" class="f-text" id="activity-reg" placeholder="開放報名時間" v-model="regist_open">
                  <p>至</p>
                  <input type="date" class="f-text" id="activity-reg" placeholder="截止報名時間" v-model="regist_close">
                </div>

                <div class="activity-start f-input-2">
          
                  <label for="activity-start" class="f-label activity-reg-1">活動舉辦時間</label>
                  <input type="date" class="f-text" id="activity-reg" placeholder="活動開始時間" v-model="activity_open">
                  <input class="f-text" id="activity-reg" placeholder="活動開始時間 ex:08:00" v-model="activity_opentime">
                  <p>至</p>
                  <input type="date" class="f-text" id="activity-reg" placeholder="活動結束時間" v-model="activity_close">
                  <input class="f-text" id="activity-reg" placeholder="活動結束時間 ex:19:00" v-model="activity_closetime">
                </div>

              </div>

              <!-- 活動地點-->
              <div class="activity-area4">
                <div class="activity-located">
                  <label for="activity-located" class="f-label">活動地點</label>
                  <input type="text" class="f-text" id="activity-located" placeholder="花蓮市內湖鄉大湖里態勢路124號" v-model="activity_address">
                </div>
              </div>


              <!-- 活動人數上限-->
              <div class="activity-membermax">
                <label for="activity-membermax" class="f-label">活動人數上限</label>
                <input type="number" class="f-text" id="activity-membermax" placeholder="100" v-model="max_ppl">
              </div>

              <!-- 活動費用-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動費用</label>
                <div class="activity-cost-block">
                  <input type="number" class="f-text" id="activity-cost" placeholder="3,400" v-model="fee" :disabled="nofee" >
                  <label class="f-checkbox free-cost">免收取費用
                    <input type="checkbox" name="multichoice" v-model="nofee" @change="handleChange">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <!-- 活動說明內文-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動詳細內容</label>
                <textarea name="" id="" cols="30" rows="10" class="f-text" placeholder="這裡之後要改成文字編輯器" v-model="content"></textarea>

              </div>

              <!-- 送出按鈕-->
              <button type="submit" class="btn-m btn-color-gray" onclick="location.href='./activity.html'">取消</button>
              <!-- 是否有預覽頁-->
              <!-- <button type="submit" class="btn-m btn-color-green" onclick="location.href='./activity.html'">送出</button> -->
              <button type="submit" class="btn-m btn-color-green" @click="activityPreview()">送出</button>

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
  data(){
    return{
      activity_name:'',
      category:'',
      regist_open:'',
      regist_close:'',
      activity_open:'',
      activity_close:'',
      activity_address:'',
      max_ppl:'',
      fee:'',
      nofee:false,
      content:'',
      pic:'',
      activity_opentime:'',
      activity_closetime:'',
    };
  },

 

  mounted() {
    
    if(sessionStorage.getItem('activity_name') !== null) {
        this.activity_name = sessionStorage.getItem('activity_name');
        this.category = sessionStorage.getItem('category');
        this.regist_open = sessionStorage.getItem('regist_open');
        this.regist_close = sessionStorage.getItem('regist_close');
        this.activity_open = sessionStorage.getItem('activity_open');
        this.activity_close = sessionStorage.getItem('activity_close');
        this.activity_opentime = sessionStorage.getItem('activity_opentime');
        this.activity_closetime = sessionStorage.getItem('activity_closetime');
        this.activity_address = sessionStorage.getItem('activity_address');
        this.max_ppl = sessionStorage.getItem('max_ppl');
        this.content = sessionStorage.getItem('content');
        this.pic = sessionStorage.getItem('pic');

    }

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
  methods:{
    sendnewspic(data){
      this.pic = data;
    },

    activityPreview(){
      if(this.activity_name === '' || this.category === '' || this.regist_open === '' ||
      this.regist_close === '' ||  this.activity_open === '' || this.activity_close === '' ||
      this.activity_opentime === '' || this.activity_closetime === '' ||
      this.activity_address === '' || this.max_ppl === '' ||  this.content === '' ||
      this.pic === '' || (this.fee === '' && this.nofee != true )){
          alert("請填寫所有欄位")
      }else{

      sessionStorage.setItem('activity_name', this.activity_name);
      sessionStorage.setItem('category', this.category);
      sessionStorage.setItem('regist_open', this.regist_open);
      sessionStorage.setItem('regist_close', this.regist_close);
      sessionStorage.setItem('activity_open', this.activity_open);
      sessionStorage.setItem('activity_close', this.activity_close);
      sessionStorage.setItem('activity_opentime', this.activity_opentime);
      sessionStorage.setItem('activity_closetime', this.activity_closetime);
      sessionStorage.setItem('activity_address', this.activity_address);
      sessionStorage.setItem('max_ppl', this.max_ppl);
      sessionStorage.setItem('nofee', this.nofee);
      sessionStorage.setItem('fee', this.fee);
      sessionStorage.setItem('content', this.content);
      sessionStorage.setItem('pic', this.pic);

      const Id = this.$route.params.Id;
      console.log(Id)
      this.$router.push({ name: 'activity_info_preview', params: { Id: Id } }); 
      }   
    },

    handleChange(){
      if(this.nofee == true){
        this.fee = '';
      }else{
      }
    }



  }




}
</script>
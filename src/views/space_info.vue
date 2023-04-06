<template>

<navbar></navbar>
    <main class="front-space">
       
      <section> 
        <h2 class="title_space">預約空間</h2>
        
          <swiper  :navigation="{ nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }" :modules="modules" class="spaceSwiper" :slidesPerView="1">

             <swiper-slide>
              <div class="image space_pic">
                <img src="../assets/img/s_1.png" alt="">
              </div>
           </swiper-slide>
             <swiper-slide>
              <div class="image space_pic">
                <img src="../assets/img/s_1.png" alt="">
              </div>
              </swiper-slide>
             <swiper-slide>
              <div class="image space_pic">
                <img src="../assets/img/s_1.png" alt="">
              </div>
              </swiper-slide>
        </swiper>
         <div class="swiper-btn">
            <button type="button" class="btn-cir-m  btn-color-white swiper-button-prev"><i class="bi bi-caret-left-fill"></i></button>
            <button type="button" class="btn-cir-m btn-color-green swiper-button-next"><i class="bi bi-caret-right-fill "></i></button>
         </div>

      </section>

      <section>
        <h2 class="title_space">選擇預約時間</h2>
        <div class="datetime">
            <!-- <VueDatePicker v-model="date"></VueDatePicker> -->
          <div id="datepicker"></div>
          <div class="selected" id="selected">
            <h4><span class="selectedD">-請先選擇日期-</span></h4>
            <div class="timepick">
                <button type="button" class="btn-m btn-color-white timeslot">08:00 - 08:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">09:00 - 09:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">10:00 - 10:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">11:00 - 11:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">12:00 - 12:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">13:00 - 13:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">14:00 - 14:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">15:00 - 15:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">16:00 - 16:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">17:00 - 17:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">18:00 - 18:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">19:00 - 19:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">20:00 - 20:59</button>
                <button type="button" class="btn-m btn-color-white timeslot">21:00 - 21:59</button>
            </div>
          </div>
        </div>
        
        <div class="confirm-btn">
          <router-link to="/space" custom v-slot="{ navigate }">
            <button class="btn-m btn-color-gray" @click="navigate" role="link">返回空間總覽</button>
          </router-link>
          <router-link to="/space_reserve" custom v-slot="{ navigate }">
            <button class="btn-m btn-color-green" @click="navigate" role="link">確認，下一步填寫資訊</button>
          </router-link>
          <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space'">返回空間總覽</button>
          <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve'">確認，下一步填寫資訊</button> -->
        </div>

      </section>

    <section>
    <h2 class="title_space">詳細資訊</h2>
        <div class="space-detail">
            <h3><i class="bi bi-dot"></i>空間資訊<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>開放時間：<span>08：00－21：00</span></li>
                <li><i class="bi bi-dot"></i>性質：<span>教室 / 靜態會議活動 / 讀書會</span></li>
                <li><i class="bi bi-dot"></i>容納人數：<span>40</span>人</li>
                <li><i class="bi bi-dot"></i>坪數：<span>33</span></li>
                <li><i class="bi bi-dot"></i>場地設備：<span>2.5噸冷氣 / 會議桌 / 椅子</span></li>
            </ul>
    
            <h3><i class="bi bi-dot"></i>預約須知<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>請於使用日前7日預約，每人限定預約當日內2場次。</li>
                <li><i class="bi bi-dot"></i>預約送出後，須待里辦公室審核預約申請，申請進度請至個人帳戶>預約空間紀錄查看。</li>
                <li><i class="bi bi-dot"></i>年節期間另行公告開放時間、若遇天災則視直轄單位宣布是否達停班停課標準。</li>
                <li><i class="bi bi-dot"></i>其他如公司行號、學校、機關團體預約或長期借用，請洽里辦公室。</li>
            </ul>
            <h3><i class="bi bi-dot"></i>管理人聯繫資訊<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>管理人：<span>李上巴</span></li>
                <li><i class="bi bi-dot"></i>聯繫電話：<span>0919426289</span></li>
            </ul>
            
            <h3><i class="bi bi-dot"></i>空間地址<i class="bi bi-dot"></i></h3>
            <ul>
                <li>花蓮縣大湖里南京東路三段219號4樓</li>
                <li>
                    <div class="space-map">
                        <img src="../assets/img/space-map.png" alt="">
                    </div>
                </li>
            </ul>

        </div>
      </section>

    </main>
    <Footer></Footer>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';

  import 'swiper/css/navigation';

  import '../assets/css/style.css';

  // import required modules
  import { Navigation } from 'swiper';


// import VueDatePicker from '@vuepic/vue-datepicker';
// import '@vuepic/vue-datepicker/dist/main.css'
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  name: 'HelloWorld',
  data () {
    return {
    }
  },
  components: {
      Swiper,
      SwiperSlide,
      navbar,
      Footer,
    },
    setup() {
      return {
        modules: [Navigation],
      };
    },
  
  mounted: function () {
    $('#resizable').resizable({});
    $('#datepicker').datepicker({
        monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
          dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
          dateFormat: "yy/mm/dd",
          
          onSelect: function(){
            var selected = $(this).val();
            $('.selectedD').html(`日期:&nbsp` + selected);

        }
    });
    var btnContainer = document.getElementById("selected");
    var btns = btnContainer.getElementsByClassName("timeslot");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");

        if (current.length > 0) {
          current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
      });
    };
  },
  
}
</script>
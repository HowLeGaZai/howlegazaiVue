<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
  <main class="backpadding">
    <backCalender></backCalender>
  
    <section class="container-main">
          <!------- 補這裡：後台側欄選單 ------->
     <BackLeftNav></BackLeftNav>
      <!------- 補這裡：後台側欄選單 ------->

      <div class="section_right">
        <h2>網站基本資訊</h2>
        <section>
            <h5>村里設定</h5>
            <div class="row">
                <div class="col-4">
                    <label for="city" class="f-label">縣市</label>
                    <input type="text" class="f-text" id="city" placeholder="範例：花蓮縣" v-model="city">
                </div>
                <div class="col-4">
                    <label for="district" class="f-label">鄉鎮市區</label>
                    <input type="text" class="f-text" id="district" placeholder="範例：花蓮市" v-model="district">
                </div>
                <div class="col-4">
                    <label for="village" class="f-label">村里</label>
                    <input type="text" class="f-text" id="village" placeholder="範例：大湖里" v-model="village">
                </div>
            </div>
            <button type="button" class="savebtn btn-10-s btn-color-green" @click="save1">儲存 </button>
        </section>
        <section>
            <h5>村里人口數</h5>
            <div class="row">
                <div class="col-6">
                    <label for="household" class="f-label">戶數</label>
                    <input type="text" class="f-text" id="household" placeholder="範例：1,500" v-model="population">
                </div>
                <div class="col-6">
                    <label for="population" class="f-label">人口數</label>
                    <input type="text" class="f-text" id="population" placeholder="範例：3,200" v-model="home_num">
                </div>
            </div>
            <button type="button" class="savebtn btn-10-s btn-color-green" @click="save2">儲存 </button>
        </section>
        <section>
            <h5>首頁封面照片</h5>
              <div class="up_banner">
            <!-- <div class="pic-upload">
                <div id = "dropzone"> 
                    <label class="uploadpic" for="customFileInput">
                        <input id="customFileInput" type="file"/>
                        <div><i class="bi bi-cloud-arrow-up"></i></div>
                    </label>
                    <h5>上傳圖片</h5>
                    <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p>
                    <img id = "bannerimg">
                </div>
                <h6><i class="bi bi-image"></i><span id = "fileName"></span></h6>
            </div> -->
                <picture-cropbanner @pic="sendpic"></picture-cropbanner>
              </div>
            <button type="button" class="savebtn btn-10-s btn-color-green" @click="save3">儲存 </button>
        </section>
      </div>
   

    </section>
  </main>
     <!-- 992以下顯示內容 -->
 
     <mobileNotSupport></mobileNotSupport>
  </div>
   <Footer></Footer>
</template>

<script>
import backendNavbar from '../components/backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import Footer from '../components/Footer.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';
import PictureCropbanner from '../components/PictureCropbanner.vue';

import axios from 'axios';
import $ from 'jquery';

export default {
  data(){
    return{
        city:'',
        district:'',
        village:'',
        population:'',
        home_num:'',
        file:'',
        pic:'',
    }
  },
  components: {
      backendNavbar,Footer,PictureCropbanner,backCalender,BackLeftNav,mobileNotSupport
    },
    created() {
    // 检查localStorage是否有存储的数据
    if (localStorage.getItem('formData')) {
      const data = JSON.parse(localStorage.getItem('formData'));
      // 将数据设置为组件数据的值
      this.city = data.city;
      this.district = data.district;
      this.village = data.village;
      this.population = data.population;
      this.home_num = data.home_num;
    }
  },
    
    mounted() {
    
   let beMenu = document.querySelectorAll(".be-menu");
   let beMenuOn = document.querySelectorAll(".be-nav-on");
  // let beMenu = document.querySelectorAll("be-nav");
  // console.log(beMenu);

  for(let i = 0; i < beMenu.length; i++){
    beMenu[i].addEventListener("click",function(){
      beMenuOn[i].classList.toggle('be-nav-off');
    //   console.log(beMenu[i]);
    })
  }

  },
  methods:{
    //建立一個fromdata 
    save1(){
      const formData = new FormData()
      formData.append('city', this.city)
      formData.append('district', this.district)
      formData.append('village', this.village)

      axios
      // 這裡是 縣市鄉
        .post('http://localhost/TGD104G1/public/API/webinfo.php', formData)
        // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
            alert("儲存成功")
        })
        .catch(error => {
            console.log(error);
        });

              // 這個是下次還可以看到 之前輸入的資料 用localStorage 先存起來
      localStorage.setItem('formData', JSON.stringify({
        city: this.city,
        district: this.district,
        village: this.village,
        population: this.population,
        home_num: this.home_num
      }));
    },
    save2(){
        //這裡是 人口 戶籍 
      const formData2 = new FormData()
      formData2.append('population', this.population)
      formData2.append('home_num', this.home_num)

      axios
        .post('http://localhost/TGD104G1/public/API/village.php', formData2)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
            alert("儲存成功")
        })
        .catch(error => {
            console.log(error);
        });
          // 這裡是可以儲存好 人數 戶數
      localStorage.setItem('formData', JSON.stringify({
        population: this.population,
        home_num: this.home_num,
        city: this.city,
        district: this.district,
        village: this.village,
      }));
    },
    save3(){
      
      // 這裡是首頁背景圖
      let formData = new FormData()
      formData.append('image', this.pic)
      axios.post('http://localhost/TGD104G1/public/API/uploadBanner.php', formData)
        .then(response => {
          console.log(response.data)
          alert("儲存成功")
        })
        .catch(error => {
          console.log(error)
        })

        localStorage.setItem('formData', JSON.stringify({
        population: this.population,
        home_num: this.home_num,
        city: this.city,
        district: this.district,
        village: this.village,
      }));
    },
    sendpic(data){
        this.pic = data;
        
    }
  },
 
  

  
}
</script>



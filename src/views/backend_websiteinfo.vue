<template>

<backendNavbar></backendNavbar>
<div class="body-sec">
     <main class="backpadding">
    <div class="container-date">
      <!-- 需渲染資料區塊 -->
      <p>西曆：2023 年 03 月 11 日</p>
      <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
      <!-- 需渲染資料區塊 -->
    </div>
    <div class="container-main">
        <div class="backend-nav">
        <ul class="">
          <li>
            <router-link :to="{name:'backend_index'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">後台管理首頁</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav btn-color-white be-menu" href="#/backend_index">
            </a> -->
            <div class="be-nav-on be-nav-off"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-white be-menu">
              <div class="width-3 text-left">網站管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on">
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button> -->
              <!-- <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button> -->
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button> -->
              <router-link :to="{name:'backend_websiteinfo'}">
                <button class="be-nav btn-font-color-green">網站基本設定</button>
              </router-link>
              <router-link :to="{name:'backend_officeinfo'}">
                <button class="be-nav btn-font-color-gray">聯絡里辦資訊</button>
              </router-link>
              <router-link :to="{name:'backend_faq'}">
                <button class="be-nav btn-font-color-gray">常見問題設定</button>
              </router-link>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 be-menu btn-color-darkgray" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <!-- <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button> -->
              <router-link :to="{name:'backend_account_new'}">
                <button class="be-nav btn-font-color-gray">待審核清單</button>
              </router-link>
              <router-link :to="{name:'backend_account_overview'}">
                <button class="be-nav btn-font-color-gray">帳戶總列表</button>
              </router-link>
              <router-link :to="{name:'backend_account_cancel'}">
                <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
              </router-link>
            </div>
          </li>

          <li>
            <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
            <!-- <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu"> --> 
              <div class="width-3 text-left">最新消息管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
              <div class="width-3 text-left">最新消息管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>
          <li>
            <router-link :to="{name:'backend_chat_list'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">討論區列表</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
              <div class="width-3 text-left">討論區列表</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <router-link :to="{name:'backend_activity'}">
                <button class="be-nav btn-font-color-gray ">活動列表</button>
            </router-link>
            <router-link :to="{name:'backend_activity_input'}">
              <button class="be-nav be-nav btn-font-color-gray">新增活動</button>
            </router-link>
              <!-- <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button> -->
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off ">
              <router-link :to="{name:'backend_space_list'}">
                <button class="be-nav btn-font-color-gray">空間總覽</button>
            </router-link>
            <router-link :to="{name:'backend_space_management'}">
              <button class="be-nav be-nav btn-font-color-gray">預約管理</button>
            </router-link>
              <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
            </div>
          </li>
          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
              <div class="width-3 text-left">團購網管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
              <div class="width-3 text-left">團購網管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>
          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
              <div class="width-3 text-left">維修通報</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
              <div class="width-3 text-left">維修通報</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-unopened be-menu " href="#">
              <div class="width-3 text-left">守望相助</div>
              <i class="bi bi-caret-down-fill i-s "></i>
            </a>
            <div class="be-nav-on be-nav-off be-menu">
              <router-link :to="{name:''}">
                <button class="be-nav btn-font-color-green">守望隊管理</button>
              </router-link>
              <router-link :to="{name:''}">
                <button class="be-nav btn-font-color-gray">簽到列表</button>
              </router-link>
              <!-- <button class="be-nav btn-font-color-green">守望隊管理</button>
              <button class="be-nav be-nav btn-font-color-gray">簽到列表</button> -->
            </div>
          </li>

          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 be-menu btn-color-unopened">
              <div class="width-3 text-left">瓦斯表數據</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>

            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
              <div class="width-3 text-left">瓦斯表數據</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>

        </ul>
      </div>

      <div class="section_right">
        <h2>網站基本資訊</h2>
        <section>
            <h5>村里設定</h5>
            <div class="row">
                <div class="col-4">
                    <label for="city" class="f-label">縣市</label>
                    <input type="text" class="f-text" id="city" placeholder="範例：花蓮縣">
                </div>
                <div class="col-4">
                    <label for="district" class="f-label">鄉鎮市區</label>
                    <input type="text" class="f-text" id="district" placeholder="範例：花蓮市">
                </div>
                <div class="col-4">
                    <label for="village" class="f-label">村里</label>
                    <input type="text" class="f-text" id="village" placeholder="範例：大湖里">
                </div>
            </div>
            <button type="button" class="savebtn btn-10-s btn-color-green" @click="save1">儲存 </button>
        </section>
        <section>
            <h5>村里人口數</h5>
            <div class="row">
                <div class="col-6">
                    <label for="household" class="f-label">戶數</label>
                    <input type="text" class="f-text" id="household" placeholder="範例：1,500">
                </div>
                <div class="col-6">
                    <label for="population" class="f-label">人口數</label>
                    <input type="text" class="f-text" id="population" placeholder="範例：3,200">
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
                <picture-cropbanner></picture-cropbanner>
              </div>
            <button type="button" class="savebtn btn-10-s btn-color-green" @click="save3">儲存 </button>
        </section>
      </div>
   

    </div>

     <!-- 992以下顯示內容 -->
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
    }
  },
  components: {
      backendNavbar,Footer,PictureCropbanner,
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
    
// function doFirst(){
//             document.getElementById('dropzone').ondragover = dragOver
//             document.getElementById('dropzone').ondrop = dropped

//             document.getElementById('customFileInput').onchange = fileChange

//         }
//         function dragOver(e){
//             e.preventDefault()
//         }
//         function dropped(e){
//             e.preventDefault()
            
//             let file = e.dataTransfer.files[0]
//             // console.log(file)

//             fileName.innerText = file.name

//             let readFile = new FileReader()
//             readFile.readAsDataURL(file)
//             readFile.addEventListener('load',function(){
//               let image = document.getElementById('bannerimg')
//                 image.src = readFile.result
//                 image.style.width = '100%'
//                 image.style.height = '100%'
//                 image.style.maxWidth = '1200px'
//                 image.style.maxHeight = '400px'

//             })    
//         }

//         function fileChange(){
//             let file = document.getElementById('customFileInput').files[0]


//             fileName.innerText = file.name
//             let readFile = new FileReader()
//             readFile.readAsDataURL(file)
//             readFile.addEventListener('load',function(){
//                 let image = document.getElementById('bannerimg')
//                 image.src = readFile.result

//                 image.style.width = '100%'
//                 image.style.height = '100%'
//                 image.style.maxWidth = '1200px'
//                 image.style.maxHeight = '400px'
//             })
//         }


//         window.addEventListener('load',doFirst)




  },
  methods:{
    save1(){
      const formData = new FormData()
      formData.append('city', this.city)
      formData.append('district', this.district)
      formData.append('village', this.village)

      axios
        .post('http://localhost/howlegazaiVue2/public/API/webinfo.php', formData)
        // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });

      this.city='';
      this.district='';
      this.village='';
    },
    save2(){

      const formData2 = new FormData()
      formData2.append('population', this.population)
      formData2.append('home_num', this.home_num)

      axios
        .post('http://localhost/howlegazaiVue2/public/API/village.php', formData2)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });

      this.population='';
      this.home_num='';
    },
    onChangeFileUpload(){
        this.file = this.$refs.file.files[0];
        console.log(this.file);
    },
    save3(){
      //  const formData3 = new FormData();
            
            // formData3.append('ProductImage', input_file.files[0]);

            let formData3 = new FormData();
            formData3.append('file', this.file);

        axios
        .post('http://localhost/howlegazaiVue2/public/API/uploadBanner.php', formData3)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });


    }
  },
 
  

  
}
</script>
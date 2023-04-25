<template>
   <backendNavbar></backendNavbar>
   <div class="body-sec">
   <main class="backpadding">
    <backCalender></backCalender>

     <section class="container-main">
             <!------- 補這裡：後台側欄選單 ------->
     <BackLeftNav></BackLeftNav>
      <!------- 補這裡：後台側欄選單 ------->
     

            <section class="section_right">
                <h2>聯絡里辦資訊</h2>
                <section>
                    <h5>村里長簡介</h5>
                    <div class="row">
                      <div class="col-12 col-ml-6">
                            <label for="lastname" class="f-label">姓</label>
                            <input type="text" class="f-text" id="lastname" placeholder="範例：王" v-model="lastname">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="firstname" class="f-label">名字</label>
                            <input type="text" class="f-text" id="firstname" placeholder="範例：小明" v-model="firstname">
                        </div>
                    
                        <div class="col-12 col-ml-6">
                            <label for="singlechoice" class="f-label">性別</label>
                            <div class="gender">
                                <label class="f-checkbox">男
                                    <input type="radio" name="singlechoice" value="男" v-model="gender">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="f-checkbox">女
                                    <input type="radio" name="singlechoice" value="女" v-model="gender">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-ml-2">
                            <label for="electionyear" class="f-label">選舉屆次</label>
                            <input type="number" class="f-text" id="electionyear" placeholder="範例：第21屆" v-model="electionyear">
                            <input type="number" class="f-text" id="electionyear" placeholder="" v-model="electionyear">
                        </div>
                        <div class="col-12 col-ml-4">
                            <label for="degree" class="f-label">學歷</label>
                            <input type="text" class="f-text" id="degree" placeholder="範例：台灣大學資工系" v-model="degree">
                        </div>
                        <div class="col-12 col-ml-12 textareaV">
                            <label for="autobiography" class="f-label">村里長簡介</label>
                            <textarea name="" id="autobiography" cols="30" rows="5" class="f-text"
                                    placeholder="村里長可以在這邊多多介紹自己喔 最多300個字" maxlength="300"
                                    v-model="autobiography"></textarea>
                        </div>
                    </div>

                    <h5>村里長照片</h5>
                    <picture-crop @pic="sendpic1"></picture-crop>

                    <!-- <div class="uploading">
                        <label for="upload-file-1" class="uploadpic">
                          <input type="file" id="upload-file-1" style="display:none">
                          <div class="btn-10-s btn-color-green ">
                            <i class="bi bi-arrow-bar-up"></i>上傳圖片
                          </div>
                        </label>
                        <div class="pic-area">
                          <div class="pic-area-box">
                            <img src="" alt="">
                            <span></span>
                              <button class="trash"><i class="bi bi-trash3"></i></button>
                          </div>
                          <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                      </div>
                    </div> -->

                </section>
                <section>
                    <h5>里辦資訊</h5>
                    <div class="row">
                        <div class="col-12 col-ml-6">
                            <label for="mainphone" class="f-label">主要聯絡電話</label>
                            <input type="text" class="f-text" id="mainphone"
                                placeholder="範例：02-2532-1453 / 0912-234-567" v-model="mainphone">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="secphone" class="f-label">第二聯絡電話</label>
                            <input type="text" class="f-text" id="secphone"
                                placeholder="範例：02-2532-1453 / 0912-234-567" v-model="secphone">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="email" class="f-label">聯絡信箱</label>
                            <input type="text" class="f-text" id="email" placeholder="範例：123@abcd.com" v-model="email">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="address" class="f-label">里辦地址</label>
                            <input type="text" class="f-text" id="address" placeholder="範例：花蓮縣花蓮市大湖里國安路1號1樓" v-model="address">
                        </div>
                    </div>
                    <button type="button" class="savebtn btn-10-s btn-color-green" @click="saveEO">儲存 </button>

                    <h5>村里特色介紹</h5>
                    <div class="frame">
                        <h5>輪播一</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化" v-model="title1">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                               
                                <!-- <div class="uploading upload_area">
                                    <label for="upload-file-2" class="uploadpic">
                                      <input type="file" id="upload-file-2" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div> -->
                               <picture-crop @pic="sendpic2"></picture-crop>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明"
                                    v-model="content1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <h5>輪播二</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化" v-model="title2">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                           
                                <!-- <div class="uploading upload_area">
                                    <label for="upload-file-3" class="uploadpic">
                                      <input type="file" id="upload-file-3" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div> -->
                               <picture-crop @pic="sendpic3"></picture-crop>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明" v-model="content2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <h5>輪播三</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化" v-model="title3">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                                <!-- <div class="uploading upload_area">
                                    <label for="upload-file-4" class="uploadpic">
                                      <input type="file" id="upload-file-4" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div> -->
                               <picture-crop @pic="sendpic4"></picture-crop>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明" v-model="content3"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" class="savebtn btn-10-s btn-color-green" @click="saveSW">儲存 </button>
                </section>
              </section>
          

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
import PictureCrop from '../components/PictureCrop.vue';

import axios from 'axios';



export default{
  data() {
    return {
      firstname : '',
      lastname : '',
      gender : '' ,
      electionyear : '' ,
      degree : '' ,
      mainphone : '',
      secphone : '',
      email : '',
      address : '' ,
      autobiography:'',
      
      responseData:'',

      title1 : '',
      title2 : '',
      title3 : '',
      content1 : '',
      content2 : '',
      content3 : '',

      //村里長
      pic1 : '',

      //輪播
      pic2 : '',
      pic3 : '',
      pic4 : '',

    }
  },
  components: {
      backendNavbar,Footer,PictureCrop,backCalender,BackLeftNav,mobileNotSupport,
      created() {
    // 检查localStorage是否有存储的数据
    if (localStorage.getItem('formData1')) {
      const data = JSON.parse(localStorage.getItem('formData1'));
      // 将数据设置为组件数据的值
      this.firstname = data.firstname;
      this.lastname = data.lastname;
      this.gender = data.gender;
      this.electionyear = data.electionyear;
      this.mainphone = data.mainphone;
      this.secphone = data.secphone;
      this.email = data.email;
      this.address = data.address;
    }
  },
    
    },
    methods: {
      // 上面的按鈕
      saveEO(){
        const formData = new FormData()
        formData.append('fullname', this.lastname + this.firstname)
        // formData.append('lastname', this.lastname)
        formData.append('gender', this.gender)
        // formData.append('female', this.female)
        formData.append('electionyear', this.electionyear)
        formData.append('degree', this.degree)
        formData.append('mainphone', this.mainphone)
        formData.append('secphone', this.secphone)
        formData.append('email', this.email)
        formData.append('address', this.address)
        formData.append('pic1', this.pic1)

        // let responseData;
       
        var mainphone = document.getElementById("mainphone").value;
        var secphone = document.getElementById("secphone").value;

        // 驗證主要聯絡電話
        if (!(/^09\d{8}$/.test(mainphone))) {
        alert("主要聯絡電話格式錯誤，應為09開頭的10個數字");
        return false;
         }
        // 驗證第二聯絡電話
        if (secphone && !(/^09\d{8}$/.test(secphone))) {
        alert("第二聯絡電話格式錯誤，應為09開頭的10個數字");
        return false;
          }

  // return true;

 
axios
  .post('http://localhost/TGD104G1/public/API/officeinfo.php', formData)
  .then(response => {
      this.responseData = response.data;
      console.log(this.responseData);
      alert("儲存成功")
  })
  .catch(error => {
      console.log(error);
  });
               // 這裡是可以儲存 基本資料
      localStorage.setItem('formData1', JSON.stringify({
        firstname: this.firstname,
        lastname: this.lastname,
        gender : this.gender,
        electionyear : this.electionyear,
        degree : this.degree,
        mainphone : this.mainphone,
        secphone :this.secphone,
        email : this.email,
        address :  this.address ,
        autobiography : 'this.autobiography',
        pic1 : this.pic1,
      }));


      },


      //最下面的按鈕
      saveSW(){
        const formData = new FormData()
      formData.append('title1', this.title1)
      formData.append('content1', this.content1)
      formData.append('title2', this.title2)
      formData.append('title3', this.title3)
      formData.append('content2', this.content2)
      formData.append('content3', this.content3)
      // 輪播圖
      formData.append('pic2', this.pic2)
      formData.append('pic3', this.pic3)
      formData.append('pic4', this.pic4)

      let responseData;

      axios
        .post('http://localhost/TGD104G1/public/API/officeSwiper.php', formData)
        .then(response => {
            // this.jsonData = response.data;
            responseData = response.data;
            console.log(response.data);
            alert("儲存成功")
        })
        .catch(error => {
            console.log(error);
        });

      this.title1;
      this.title2;
      this.title3;
      this.content1;
      this.content2;
      this.content3;
      this.content3;
      this.pic2;
      this.pic3;
      this.pic4;
      
     
      },

      sendpic1(data){
        this.pic1 = data;
      },
      sendpic2(data){
        this.pic2 = data;
      },
      sendpic3(data){
        this.pic3 = data;
      },
      sendpic4(data){
        this.pic4 = data;
      }
    },
    mounted() {
    // ======nav的收合======
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
 
  

  
}
</script>
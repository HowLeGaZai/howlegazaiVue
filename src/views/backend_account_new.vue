<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

      <section class="container-main">
        <!------- 補這裡：後台側欄選單 ------->
        <BackLeftNav></BackLeftNav>
        <!------- 補這裡：後台側欄選單 ------->

        <section class="section_right bk-account-new">
          <!-- 待審核清單 -->

          <div class="w90percentage accounttable">
            <h1>待審核清單</h1>

            <div class="displayflex maxheight">
              <!-- div 製作 table -->
              <section class="bk-account-new-s">
                <ul class="row">
                  <li class="row-head col-sm-12 col-sm-1">待審核</li>
                  <li class="row-head col-sm-12 col-sm-1">編號</li>
                  <li class="row-head col-sm-12 col-sm-1">姓名</li>
                  <li class="row-head col-sm-12 col-sm-4">帳號</li>
                  <li class="row-head col-sm-12 col-sm-4">地址</li>
                  <li class="row-head col-sm-12 col-sm-1">展開</li>
                </ul>

                <!-- 第一筆資料 -->
                <template v-for="(accountNew,index) in jsonData" :key="index">

                  <ul class="ori-row row">
                    <li class="col-sm-12 col-sm-1">
                      <i class="bi bi-check" @click="confirm(index)"> </i><i class="bi bi-x" @click="cancel(index)"></i>
                    </li>
                    <li class="col-sm-12 col-sm-1">001</li>
                    <li class="col-sm-12 col-sm-1">{{accountNew.FULL_NAME}}</li>
                    <li class="col-sm-12 col-sm-4">{{accountNew.ACCOUNT}}</li>
                    <li class="col-sm-12 col-sm-4">{{accountNew.ADDRESS}}</li>
                    <li class="col-sm-12 col-sm-1">
                      <i class="bi bi-caret-down-fill openBtn" id="openBtn" @click="info(index)"></i>
                    </li>
                  </ul>
                  <div class="hidden">
                    <ul class="row">
                      <li class="col-sm-12 col-sm-2">出生年月日</li>
                      <li class="col-sm-12 col-sm-1">性別</li>
                      <li class="col-sm-12 col-sm-2">暱稱</li>
                      <li class="col-sm-12 col-sm-4">email</li>
                      <li class="col-sm-12 col-sm-3">電話號碼</li>
                    </ul>
                    <ul class="row">
                      <li class="col-sm-12 col-sm-2">{{accountNew.BIRTHDATE}}</li>
                      <li class="col-sm-12 col-sm-1">{{accountNew.GENDER}}</li>
                      <li class="col-sm-12 col-sm-2">{{accountNew.NICKNAME}}</li>
                      <li class="col-sm-12 col-sm-4">{{accountNew.EMAIL}}</li>
                      <li class="col-sm-12 col-sm-3">{{accountNew.PHONE}}</li>
                    </ul>
                    <div>
                      <p>身分證影本</p>
                      <div class="nationalIDC">
                        <img :src="accountNew.IDCARD_FRONT" alt="" />
                        <img :src="accountNew.IDCARD_BACK" alt="" />
                      </div>
                    </div>
                  </div>
                </template>
                <!-- 第二筆資料 -->
                <!-- <ul class="ori-row row">
                  <li class="col-sm-12 col-sm-1">
                    <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                  </li>
                  <li class="col-sm-12 col-sm-1">001</li>
                  <li class="col-sm-12 col-sm-1">王小明</li>
                  <li class="col-sm-12 col-sm-4">myaccount123@gmail.com</li>
                  <li class="col-sm-12 col-sm-4">花蓮縣大湖里碧山路255巷7號</li>
                  <li class="col-sm-12 col-sm-1">
                    <i class="bi bi-caret-down-fill openBtn" id="openBtn"></i>
                  </li>
                </ul>
                <div class="hidden">
                  <ul class="row">
                    <li class="col-sm-12 col-sm-2">出生年月日</li>
                    <li class="col-sm-12 col-sm-1">性別</li>
                    <li class="col-sm-12 col-sm-2">暱稱</li>
                    <li class="col-sm-12 col-sm-4">email</li>
                    <li class="col-sm-12 col-sm-3">電話號碼</li>
                  </ul>
                  <ul class="row">
                    <li class="col-sm-12 col-sm-2">1989/7/4</li>
                    <li class="col-sm-12 col-sm-1">男</li>
                    <li class="col-sm-12 col-sm-2">五星上將</li>
                    <li class="col-sm-12 col-sm-4">ismail123@mail.com</li>
                    <li class="col-sm-12 col-sm-3">0912345678</li>
                  </ul>
                  <div>
                    <p>身分證影本</p>
                    <div class="nationalIDC">
                      <img src="../assets/img/font-idcard.jpg" alt="" />
                      <img src="../assets/img/back-idcard.jpg" alt="" />
                    </div>
                  </div>
                </div> -->
              </section>

              <!-- table 版本 -->
              <!-- <table class="back-table-2">
                  <tbody>
                    <tr>
                      <td>通過審核</td>
                      <td>編號</td>
                      <td>姓名</td>
                      <td>帳號</td>
                      <td>地址</td>
                      <td>展開</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>花蓮縣大湖里碧山路255巷7號</td>
                      <td>
                        <i class="bi bi-caret-down-fill" id="openBtn"></i>
                      </td>
                    </tr>

                    <tr class="hidden-row">
                      <td>
                        <ul>
                          <li>aaa</li>
                          <li>aaa</li>
                          <li>aaa</li>
                          <li>aaa</li>
                        </ul>
                      </td>
                      <td>
                        <table>
                          <tbody>
                            <tr>
                              <td>出生年月日</td>
                              <td>性別</td>
                              <td>暱稱</td>
                              <td>email</td>
                              <td>電話號碼</td>
                              <td>身分證影本</td>
                            </tr>
                            <tr>
                              <td>1989/7/4</td>
                              <td>男</td>
                              <td>五星上將</td>
                              <td>ismail123@mail.com</td>
                              <td>0912345678</td>
                              <td>
                                <img src="" alt="" />
                                <img src="" alt="" />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>花蓮縣大湖里碧山路255巷7號</td>
                      <td><i class="bi bi-caret-down-fill"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>花蓮縣大湖里碧山路255巷7號</td>
                      <td><i class="bi bi-caret-down-fill"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>花蓮縣大湖里碧山路255巷7號</td>
                      <td><i class="bi bi-caret-down-fill"></i></td>
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>花蓮縣大湖里碧山路255巷7號</td>
                      <td><i class="bi bi-caret-down-fill"></i></td>
                    </tr>
                  </tbody>
                </table> -->

              <!-- 頁碼 -->
              <ul class="btn-page-block">
                <li>
                  <button class="btn-page btn-color-white">
                    <i class="bi bi-caret-left-fill"></i>
                  </button>
                </li>
                <li><button class="btn-page btn-color-green">1</button></li>
                <li><button class="btn-page btn-color-white">2</button></li>
                <li><button class="btn-page btn-color-white">3</button></li>
                <li>
                  <button class="btn-page btn-color-white">
                    <i class="bi bi-caret-right-fill"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </section>
    </main>
    <!------ 補這裡：不支援手機畫面 ------>
    <div :class="bodyClass" class="nosupport">
      <main>
        <section class="noSupport">
          <a href="#">
            <div>
              <img class="LiIcon" src="../assets/img/LiIcon.png" alt="" />
              <h1>歹勢！後台目前不支援手機</h1>
              <img class="cat" src="../assets/img/Cat.png" alt="" />
              <p>下班請休息，我們明天再忙！</p>
            </div>
          </a>
        </section>
      </main>
    </div>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>

  <Footer></Footer>
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from "./Footer.vue";

// 側欄開合
import $ from "jquery";
import "jquery-ui-dist/jquery-ui";
import "jquery-ui-dist/jquery-ui.min.css";
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';


export default {
  data(){
        return{
          jsonData:[],  
        };
  },
  components: {
    backendNavbar,
    Footer,backCalender,BackLeftNav
  },
  mounted() {

    // table row 開合 //
    // 原本js的開合
    // let openBtns = document.querySelectorAll(".openBtn");
    // let hiddenRows = document.querySelectorAll(".hidden");

    // openBtns.forEach((openBtn, index) => {
    //   openBtn.addEventListener("click", () => {
    //     let hiddenRow = hiddenRows[index];
    //     if (hiddenRow.style.maxHeight) {
    //       hiddenRow.style.maxHeight = null;
    //       openBtn.classList.remove("rotate");
    //     } else {
    //       hiddenRow.style.maxHeight = hiddenRow.scrollHeight + "px";
    //       openBtn.classList.add("rotate");
    //     }
    //   });
    // });
     axios
     .post('http://localhost/TGD104G1/public/API/accountNew.php')
        // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);

        })
        .catch(error => {
            // console.log(error);
        });


  },

  methods:{
    //vue寫法的開合
    info(index){
      let openBtns = document.querySelectorAll(".openBtn");
      let hiddenRows = document.querySelectorAll(".hidden");
      let hiddenRow = hiddenRows[index];
      let openBtn = openBtns[index];
        if (hiddenRow.style.maxHeight) {
          hiddenRow.style.maxHeight = null;
          openBtn.classList.remove("rotate");
        } else {
          hiddenRow.style.maxHeight = hiddenRow.scrollHeight + "px";
          openBtn.classList.add("rotate");
        }
    },
    confirm(index){

      
        let formData = new FormData()
        formData.append('ID', this.jsonData[index].ID)
        axios.post('http://localhost/TGD104G1/public/API/accountNew_confirm.php', formData)
          .then(response => {
            console.log(response.data)
          })
          .catch(error => {
            console.log(error)
          })

      location.reload();

    },

    cancel(index){

      
        let formData = new FormData()
        formData.append('ID', this.jsonData[index].ID)
        axios.post('http://localhost/TGD104G1/public/API/accountNew_cancel.php', formData)
          .then(response => {
            console.log(response.data)
          })
          .catch(error => {
            console.log(error)
          })

      location.reload();
      
    },
    
  }
};
</script>

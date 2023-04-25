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
          <!-- 帳戶總覽 -->
          <div class="w90percentage accounttable bk-account-cancel maxheight">
            <div>
              <h1>已刪除帳戶</h1>
              <div class="displayflex justifycontent">
                <div class="dropdown">
                  <label for="selecte" class="f-label">成員分類</label>
                  <select name="" id="selecte" class="f-select" v-model="selectLevel">
                    <option value="">-選擇-</option>
                    <option value="戶長">戶長</option>
                    <option value="成員">成員</option>
                  </select>
                </div>
              </div>
              <div class="">
                <table class="back-table-2">
                  <tbody>
                    <tr>
                      <td>刪除日期</td>
                      <td>編號</td>
                      <td>姓名</td>
                      <td>帳號</td>
                      <td>等級</td>
                      <td>申請日期</td>
                    </tr>
                    <tr v-for="account in filteredItems">
                      <td>{{account[0]}}</td>
                      <td>{{account[1]}}</td>
                      <td>{{account[2]}}</td>
                      <td>{{account[3]}}</td>
                      <td>{{account[4]}}</td>
                      <td>{{account[5]}}</td>
                    </tr>
                    <!-- <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr>
                    <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr>
                    <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr>
                    <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr>
                    <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr>
                    <tr>
                      <td>2023/04/04</td>
                      <td>001</td>
                      <td>王伯伯</td>
                      <td>daddylee</td>
                      <td>戶長</td>
                      <td>2023/01/01</td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
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
        </section>
      </section>
    </main>
         <!------ 補這裡：不支援手機畫面 ------>
         <mobileNotSupport></mobileNotSupport>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>
  <Footer></Footer>
</template>

<script>
import backendNavbar from '@/components/backendNavbar.vue';
import Footer from '@/components/Footer.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';

// 測欄開合
import $ from "jquery";
import "jquery-ui-dist/jquery-ui";
import "jquery-ui-dist/jquery-ui.min.css";
import axios from 'axios';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';


export default {
  components: {
      backendNavbar,
      Footer,
      backCalender,
      BackLeftNav,
      mobileNotSupport
  },
  data(){
      return {
              jsonData: [],
              selectLevel:"",
              }
  },
  mounted() {

     axios
        .get('http://localhost/TGD104G1/public/API/afterUpdateAccount.php')
        // .get('https://tibamef2e.com/tgd104/g1/afterUpdateAccount.php')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });
  },

  computed: {
    filteredItems() {
      if(this.selectLevel === ""){
        return this.jsonData;
      }else{
        return this.jsonData.filter(
          (jsonData) => jsonData.LEVEL === this.selectLevel
        );
      }
    },
  },
};
</script>

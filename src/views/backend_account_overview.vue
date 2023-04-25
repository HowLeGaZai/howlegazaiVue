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
          <div class="w90percentage accounttable bk-account-overview maxheight">
            <div>
              <h1>帳戶總列表</h1>
              <div class="displayflex justifycontent">
                <div class="dropdown">
                  <label for="selecte" class="f-label">成員分類</label>
                  <select name="" id="selecte" class="f-select" v-model="selectedCategory">
                    <option value="">-選擇-</option>
                    <option value="戶長">戶長</option>
                    <option value="成員">成員</option>
                  </select>
                </div>
                <button type="button" class="btn-10-s btn-color-green" @click="downloadCSV">
                  <i class="bi bi-cloud-arrow-down-fill"></i>匯出資料
                </button>
              </div>
              <div class="">
                <table class="back-table-2">
                  <tbody>
                    <tr>
                      <td>編號</td>
                      <td>姓名</td>
                      <td>帳號</td>
                      <td>等級</td>
                      <td>標籤</td>
                      <!-- <td>編輯</td> -->
                      <td>刪除</td>
                    </tr>
                    <tr v-for="(account, index) in filteredItems" :key="index">
                      <td>{{ account[0] }}</td>
                      <td>{{ account[1] }}</td>
                      <td>{{ account[2] }}</td>
                      <td>{{ account[3] }}</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>{{ account[4] }}</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn-icon" @click="manage(index)">
                          <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                        </button>
                      </td>
                    </tr>
                    <!-- <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td>
                    </tr> -->
                    <!-- <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td>
                    </tr> -->

                    <!-- <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td>
                    </tr> -->

                    <!-- <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td>
                    </tr> -->
                    <!-- <tr>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123</td>
                      <td>戶長</td>
                      <td>
                        <div class="guard">
                          <i class="bi bi-tag"></i>
                          <span>守望隊</span>
                          <i class="bi bi-x"></i>
                        </div>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-pencil-square btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- <td>
                        <button type="button" class="btn-icon">
                          <i
                            class="bi bi-x-circle-fill btn-font-color-green"
                          ></i>
                        </button>
                      </td> -->
                    <!-- </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- 頁碼 -->
            <!-- <ul class="btn-page-block">
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
            </ul> -->
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
import backendNavbar from "../components/backendNavbar.vue";
import backCalender from '../components/BackCalender.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';
import Footer from "../components/Footer.vue";
import axios from 'axios';
import BackLeftNav from '../components/BackLeftNav.vue';



// 測欄開合
import $ from "jquery";
import "jquery-ui-dist/jquery-ui";
import "jquery-ui-dist/jquery-ui.min.css";

export default {
  components: {
    backendNavbar,
    Footer,backCalender,BackLeftNav,mobileNotSupport

  },
  data() {
    return {
      jsonData: [],
      selectedCategory:'',
    }
  },
  methods: {
    manage(index) {
      // console.log(index);
      console.log(this.jsonData[index]);
      console.log('ID是' + this.jsonData[index][0]);
      axios
        // .post('https://tibamef2e.com/tgd104/g1/accountOverview.php', {index:this.jsonData[index][0]})
        .post('http://localhost/TGD104G1/public/API/manageAccount.php', { index: this.jsonData[index][0] })
        .then(response => {
          // this.jsonData = response.data;
          console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });

      location.reload();
    },
    downloadCSV() {
      axios.get('http://localhost/TGD104G1/public/API/download_user.php')
      .then(response => {
        // 建立下載連結
        const url = window.URL.createObjectURL(new Blob([response.data]));
        const link = document.createElement('a');
        link.href = url;
        link.setAttribute('download', '用戶資料.csv');
        document.body.appendChild(link);
        link.click();
      });
    }
  },
  computed: {
    filteredItems() {
      if(this.selectedCategory === ""){
        return this.jsonData;
      }else{
        return this.jsonData.filter(
          (jsonData) => jsonData.LEVEL === this.selectedCategory
        );
      }
    },
  },
  mounted() {
    $("#resizable").resizable({});
    $("#datepicker").datepicker({
      monthNames: [
        "一月",
        "二月",
        "三月",
        "四月",
        "五月",
        "六月",
        "七月",
        "八月",
        "九月",
        "十月",
        "十一月",
        "十二月",
      ],
      dayNamesMin: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
      dateFormat: "yy/mm/dd",

      onSelect: function () {
        var selected = $(this).val();
        $(".selectedD").html(`日期:&nbsp` + selected);
        // console.log(selected);

        // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
        // console.log(dayNamesMin);
      },
    });

    //  ＝＝＝＝＝＝側欄選單的JS＝＝＝＝＝＝

    axios
      //  htdocs的環境下測試
      .get('http://localhost/TGD104G1/public/API/accountOverview.php')
      // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
      .then(response => {
        this.jsonData = response.data;
        console.log(response.data);
      })
      .catch(error => {
        // console.log(error);
      });




    //  ＝＝＝＝＝＝側欄選單的JS end＝＝＝＝＝＝
  },
};
</script>

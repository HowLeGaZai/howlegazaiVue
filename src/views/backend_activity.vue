<template>
  <backendNavbar></backendNavbar>

  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

      <section class="container-main">
        <BackLeftNav></BackLeftNav>

        <section class="section_right">
          <!-- 活動總覽 -->
          <div class="w90percentage accounttable bk-activity">
            <h1>活動總覽</h1>
            <div class="displayflex justifycontent">

              <div class="displayflex textalignleft">
                <div class="marginright20">
                  <label for="selecte" class="f-label">分類</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">全部</option>
                    <option value="2">旅遊</option>
                    <option value="3">健康</option>
                    <option value="4">藝文</option>
                    <option value="5">其他</option>
                  </select>
                </div>
                <div>
                  <label for="selecte" class="f-label">上架狀態</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">全部</option>
                    <option value="2">上架中</option>
                    <option value="3">已下架 </option>

                  </select>
                </div>
              </div>
              <div class="displayflex margintop18">
                  <button type="button" class="btn-10-s btn-color-green" @click="toNewactivity">
                    <i class="bi bi-plus-lg"></i>新增活動
                  </button>

              </div>

            </div>
            <div class="">

              <table class=" back-table-2 bk-activity-table">

                <tbody>
                  <tr>
                    <td>編號</td>
                    <td>分類</td>
                    <td>活動名稱</td>
                    <td>費用</td>
                    <td>報名數</td>
                    <td>名單</td>
                    <td>置頂</td>
                    <td>編輯</td>
                    <td>上架狀態</td>
                  </tr>
                  <tr v-for="(data, index) in datas" :key="index">
                    <td data-label="活動編號">{{ data.ID }}</td>
                    <td data-label="活動分類">{{ data.CATEGORY }}</td>
                    <td data-label="活動名稱">
                            <router-link class="titlelink" :to="{ name: 'activity_info', params: { Id: data.ID } }">
                                {{data.TITLE}}
                            </router-link>
                    </td>
                    <td data-label="活動價格">{{ data.PRICE == 0 ? '免費' : data.PRICE + "元" }}</td>
                    <td data-label="報名數">{{ data.TOTAL_ATTEND_NUM }}</td>
                    
                    <!-- 名單 -->
                    <td>
                      <router-link class="titlelink" :to="{ name: 'backend_activity_memberlist', params: { Id: data.ID } }">
                          <button type="button" class="btn-icon">
                            <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                          </button>
                      </router-link>
                    </td>

                    <!-- 置頂 -->
                    <td>
                      <label class="f-checkbox">
                          <input type="checkbox">
                          <span class="checkmark newscheck"></span>
                        </label>
                      </td>

                    <!-- 編輯 -->
                    <td>
                      <button type="button" class="btn-icon">
                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                      </button>
                    </td>

                    <!-- 上下架 -->
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
            <!-- 頁碼 -->
            <!-- <ul class="btn-page-block">
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
              <li><button class="btn-page btn-color-green">1</button></li>
              <li><button class="btn-page btn-color-white">2</button></li>
              <li><button class="btn-page btn-color-white">3</button></li>
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
            </ul> -->

          </div>
        </section>
      </section>


    </main>
      <mobileNotSupport></mobileNotSupport>
  </div>
  <Footer></Footer>
</template>

<script>
import backendNavbar from '../components/backendNavbar.vue';
import Footer from '../components/Footer.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';

export default {
  data() {
    return {
      ID:'',
      TITLE:'',
      PRICE:'',
      TOP:'',
      STATUS:'',
      CATEGORY:'',
      ATTEND_NUM:'',

      datas:[],
      id: new Date().getTime()
    };
  },
  components: {
      backendNavbar,
      Footer,
      backCalender,
      BackLeftNav,
      mobileNotSupport
  },
  mounted() {

      // 撈取活動資料
      axios
        .get('http://localhost/TGD104G1/public/API/backend_activity.php')
        .then(response => {
            this.jsonData = response.data;
            this.datas = this.jsonData
        })
        .catch(error => {
            console.log(error);
        });
        
  },
  methods: {
          
      toNewactivity(){
          this.$router.push({ path: '/backend_activity_input/' + this.id });
      },

  },
};
</script>
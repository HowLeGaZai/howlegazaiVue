<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <div class="container-date">
        <backCalender></backCalender>
      </div>

      <section class="container-main">
        <BackLeftNav></BackLeftNav>
        <section class="section_right">
          <!-- 活動總覽 -->
          <div class="w90percentage accounttable bk-activity-member">
            <router-link :to="{name:'backend_activity'}">
              <button class="btn-prepage font-green">
                <i class=" bi bi-caret-left-fill font-green"></i>返回【活動總覽】</button>
            </router-link>
            <h1>{{Title}}<span v-if="note">目前無人報名喔</span></h1>
            <div class="displayflex">
              <div class="displayflex margintop18">
                <button type="button" class="btn-10-s btn-color-green">
                  <i class="bi bi-cloud-arrow-down-fill"></i> 匯出資料
                </button>

              </div>

            </div>

          </div>
          
          <!-- 直項捲軸 -->
          <div class="bk-activity-member-list">
            <table class=" back-table-2">
              <tbody>
                <tr>
                  <td>報名序號</td>
                  <td>報名日期</td>
                  <td>參加人姓名</td>
                  <td>聯絡電話</td>
                  <td>電子信箱</td>
                </tr>

                <!-- 尚未完成：bug 無法渲染多筆訂單的多筆報名資料 -->
                <tr v-for="(data, index) in datas[i]" :key="index[i]">
                  <td>{{ data.ID }}</td>
                  <td>{{ new Date(data.CREATE_TIME).toLocaleDateString() }}</td>
                  <td>{{ data.ATTEND_NAME }}</td>
                  <td>{{ data.ATTEND_MAIL }}</td>
                  <td>{{ data.ATTEND_PHONE }}</td>
                </tr>
              </tbody>
            </table>
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
  components: {
    backendNavbar, Footer,backCalender,BackLeftNav,mobileNotSupport
  },
  data() {
    return {
      activityID:'',
      TITLE:'',
      note:false,
      original:[],
      datas:[],
    };
  },
  mounted() {

    // 撈取頁面 ID
    this.activityID = this.$route.params.Id;

    // 拋進去 activityID
    const activityID =  this.activityID;
    const url = "http://localhost/TGD104G1/public/API/backend_activity_memberlist.php";
    const data = new FormData();
    data.append('paramsID', activityID)
    
    axios
        .post(url, data)
        .then((response) => {
            const result = response.data;
            
            // 沒資料告訴用戶無資料
            if (result === 'nodata') {
                this.note = true;
            } else {
              console.log("有訂單");
              this.original = result;
              console.log(this.original.TITLE)
              this.datas = this.original.map(data => this.getAttend(data)).concat();
              this.TITLE = this.datas[0].TITLE;
              };
        })
        .catch(error => {
            console.log(error);
        });

  },
  methods:{

    getAttend(data) {
      const ATTEND_NAME = data.ATTEND_NAME.slice(1, -1).split(",");
      const ATTEND_GENDER = data.ATTEND_GENDER.slice(1, -1).split(",");
      const ATTEND_MAIL = data.ATTEND_MAIL.slice(1, -1).split(",");
      const ATTEND_PHONE = data.ATTEND_PHONE.slice(1, -1).split(",");
      const ID = data.ID;
      const TITLE = data.TITLE;
      const CREATE_TIME = data.CREATE_TIME;

      const datas = ATTEND_NAME.map((name, i) => {
        return {
          'ID': ID,
          'TITLE': TITLE,
          'CREATE_TIME': CREATE_TIME,
          'ATTEND_NAME': ATTEND_NAME[i],
          'ATTEND_MAIL': ATTEND_MAIL[i],
          'ATTEND_PHONE': ATTEND_PHONE[i],
          'ATTEND_GENDER': ATTEND_GENDER[i],
        };
      });

      return [].concat(...datas);

    },


  },
}





</script>
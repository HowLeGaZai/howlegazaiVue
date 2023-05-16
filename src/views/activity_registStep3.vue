<template>

<navbar></navbar>
    <main class="activity_info">
        <div class="info_topic">
            <h1>感謝報名</h1>
            <!-- activity TITLE-->
            <h2>{{jsonData[6]}}</h2>
        </div>

        <div class="threesteps">
          <div class="steps">
              <div class="steps-circle">1</div>
              <h5>填寫資料</h5>
          </div>
          <div class="line"></div>
          <div class="steps">
              <div class="steps-circle">2</div>
              <h5>確認資料</h5>
          </div>
          <div class="line"></div>
          <div class="steps">
              <div class="steps-circle">3</div>
              <h5>報名完成</h5>
          </div>
      </div>

        <div class="info-article">
           
          <!-- <table class="green-table">
            <thead>
                <tr>
                    <th colspan="2">活動報名資訊</th>
                </tr>
            </thead>
            <tbody> -->
                <!-- activity order ID-->
                <!-- <tr class="row">
                    <td class="col-md-3 col-sm-4 col-12">報名序號</td>
                    <td class="col-md-9 col-sm-8 col-12">QQ952712</td>
                </tr>
                <tr class="row"> -->
                    <!-- activity CONTENT-->
                    <!-- <td class="col-md-3 col-sm-4 col-12">活動名稱</td>
                    <td class="col-md-9 col-sm-8 col-12">這是看電影的活動</td>
                </tr>
                <tr class="row"> -->
                     <!-- activity LOCATION-->
                    <!-- <td class="col-md-3 col-sm-4 col-12">活動地點</td>
                    <td class="col-md-9 col-sm-8 col-12">信義里活動中心</td>
                </tr>
                <tr class="row">
                    <td class="col-md-3 col-sm-4 col-12">訂購人</td>
                    <td class="col-md-9 col-sm-8 col-12"> -->
                        <!-- attend detail ATTEND NAME -->
                        <!-- <p>姓名：<span>李上巴</span></p> -->
                        <!-- attend detail ATTEND PHONE -->
                        <!-- <p>聯絡電話：<span>0912-345-678</span></p> -->
                        <!-- attend detail ATTEND MAIL-->
                        <!-- <p>信箱：<span>zxc140zxc140@gmail.com</span></p>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-md-3 col-sm-4 col-12">參加人 1</td>
                    <td class="col-md-9 col-sm-8 col-12">
                        <p>姓名：<span>李上巴</span></p>
                        <p>聯絡電話：<span>0912-345-678</span></p>
                        <p>信箱：<span>zxc140zxc140@gmail.com</span></p>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-md-3 col-sm-4 col-12">參加人 2</td>
                    <td class="col-md-9 col-sm-8 col-12">
                            <p>姓名：<span>李中巴</span></p>
                            <p>聯絡電話：<span>0912-345-678</span></p>
                            <p>信箱：<span>zxc140zxc140@gmail.com</span></p>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col-md-3 col-sm-4 col-12">參加人 3</td>
                    <td class="col-md-9 col-sm-8 col-12">
                            <p>姓名：<span>李下巴</span></p>
                            <p>聯絡電話：<span>0912-345-678</span></p>
                            <p>信箱：<span>zxc140zxc140@gmail.com</span></p>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                </tr>
            </tfoot>
        </table> -->
    
        <div class="backBtn">
          
          <router-link to="/activity" custom v-slot="{ navigate }">
             <button type="button" class="btn-m btn-color-white" @click="navigate" role="link">返回活動列表</button>
        </router-link>
        <router-link to="/account_user_activity" custom v-slot="{ navigate }">
             <button type="button" class="btn-m btn-color-green" @click="navigate" role="link">查看我的報名紀錄</button>
        </router-link>
        </div>
           
        </div>

    </main>
</template>

<script>

import navbar from '../components/navbar.vue';

export default {
    data() {
        return {
            
            jsonData:[],

    };
  },
  components: {
      navbar,
    },
    mounted(){

        const formData = new FormData();
        formData.append('USER_ID', this.getCookieValue('id'))
        axios
              .post('http://localhost/TGD104G1/public/API/activity_confirm.php',formData)

                  .then(response => {
                      this.jsonData = response.data[0];
                      console.log(response.data);
                      
                  })
                  .catch(error => {
                      // console.log(error);
                  });

    },
    methods:{
        getCookieValue(cookieName) {
        // 讀取指定名稱的 Cookie 值
        const cookieStr = decodeURIComponent(document.cookie);
        const cookies = cookieStr.split("; ");
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].split("=");
            if (cookie[0] === cookieName) {
            return cookie[1] || null;
            }
        }
        return null;
        },

    },

}
</script>
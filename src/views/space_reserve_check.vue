<template>

<navbar></navbar>

    <main class="front-space">
       <section>
        <h1 class="title_space">預約空間</h1>
      </section>
        <div class="popup">
          <div class="popup_l">
            <!-- <button type="button" class="btn-cir-s btn-color-green"><i class="bi bi-caret-left-fill i-s"></i></button> -->
            <br>
            <h3 class="">預約單號 : 001</h3>
            <br>
            <div class="popup_l_s">
              <div class="popup-pad">
                <img :src="spaceData.SPACE_PIC" alt="">
              </div>
              <div class="popup-pad">
                <h3>{{spaceData.NAME}}</h3>
                <br>
                <h4>{{spaceData.CATEGORY}}</h4>
                <br>
                <h4>空間大小：{{spaceData.CAPACITY}}坪</h4>
                <br>
                <h4>地址：{{spaceData.ADDRESS}}</h4>
                <h5 class="popup-pad">{{date}}
                  {{time}}</h5>
              </div>
              <!-- <br> -->
              <div>
      
              </div>
            </div>
            <br>
            <div class="popup_l_t">
              <h3>申請人資訊</h3>
              <br>
              <h4>姓名：{{name}} {{inputState}}</h4>
              <br>
              <h4>聯絡電話：{{phone}}</h4>
              <br>
              <h4>電子信箱：{{mail}}</h4>
              <br>
              <h4>申請用途：{{apply}}</h4>
              <br>
            </div>
          </div>
        </div>
      <div class="confirm-btn">
         <router-link to="/space_reserve" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-gray" @click="navigate" role="link">返回上一步</button>
            </router-link>
             <!-- <router-link to="/space_reserve_confirm" custom v-slot="{ navigate }"> -->
                          <button class="btn-m btn-color-green" @click="navigate2" role="link">確認送出</button>
            <!-- </router-link> -->
        <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space_reserve'">返回上一步</button>
        <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve_confirm'">填寫完成，送出申請</button> -->
      </div>

    </main>
    <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  data(){
      return {
        spaceData:[],
        spaceJsonData:[],
        date:'',
        onlydate:'',
        time:'',

        start:'',
        end:'',
        name:'',
        inputState:'', //稱謂
        phone:'',
        mail:'',
        apply:'',
      }
  },
  components: {
      navbar,Footer,
    },
  methods:{
    getSpaceData() {
              axios
                    .get(`${process.env.VUE_APP_AJAX_URL}space.php`)
                    .then(response => {
                        this.spaceJsonData = response.data;
                        console.log(response.data);

                        let space = sessionStorage.getItem("space");

                        for(let i=0;i<this.spaceJsonData.length;i++){
                          if(space == this.spaceJsonData[i][1]){
                            this.spaceData = this.spaceJsonData[i];
                          }else{
                          }
                        }
                    })
                    .catch(error => {
                        // console.log(error);
                    });
    },

    navigate2(){
            let spaceID = sessionStorage.getItem("spaceID");

            this.start = sessionStorage.getItem('start');
            this.end = sessionStorage.getItem('end');

            const formData = new FormData()
            formData.append('USER_ID', this.getCookieValue('id'))
            formData.append('date', this.onlydate)
            formData.append('start', this.start)
            formData.append('end', this.end)
            formData.append('APPLY_NAME', this.name)
            formData.append('APPLY_TITLE', this.inputState)
            formData.append('APPLY_MAIL', this.mail)
            formData.append('APPLY_PHONE', this.phone)
            formData.append('PURPOSE', this.apply)
            formData.append('SPACE_ID', spaceID)

            axios
            .post(`${process.env.VUE_APP_AJAX_URL}spaceInfo.php`, formData)
            .then(response => {
                // this.jsonData = response.data;
                console.log(response.data);
            })
            .catch(error => {
                console.log(error);
            });

            this.$router.push('/space_reserve_confirm')
    },
    getCookieValue(cookieName) {
      // 讀取指定名稱的 Cookie 值
      const cookieStr = decodeURIComponent(document.cookie);
      const cookies = cookieStr.split('; ');
      for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split('=');
        if (cookie[0] === cookieName) {
          return cookie[1] || null;
        }
      }
      return null;
      },
    
  },
  mounted(){
        this.getSpaceData();
        this.onlydate = sessionStorage.getItem('onlydate');
        this.date = sessionStorage.getItem('date');
        this.time = sessionStorage.getItem('time');
        this.name = sessionStorage.getItem("APPLY_NAME");
        if(sessionStorage.getItem("APPLY_TITLE") == "male"){
          this.inputState = "先生"
        }else{
          this.inputState = "女士"
        }
        this.phone = sessionStorage.getItem("APPLY_PHONE");
        this.mail = sessionStorage.getItem("APPLY_MAIL");
        this.apply = sessionStorage.getItem("PURPOSE");

    },
}
</script>
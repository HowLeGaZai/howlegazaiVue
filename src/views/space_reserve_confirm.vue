<template>

<navbar></navbar>

    <main class="front-space front-space-confirm">
        <section>
          <h1 class="title_space">預約空間</h1>
        </section>
        <img src="../assets/img/CheckCircle.svg" alt="">
        <h6>預約成功，待二至三日工作天審核成功後，即完成預約。</h6>
        <h6>查看進度請至個人帳戶>空間預約紀錄</h6>
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
                <h4>空間大小：{{spaceData.SPACE_SIZE}}</h4>
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
              <h4>姓名：{{name}} 先生</h4>
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
        <router-link to="/" custom v-slot="{ navigate }">
                <button class="btn-m btn-color-green" @click="navigate" role="link">返回首頁</button>
        </router-link>
        <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/'">返回首頁</button> -->
      </div>
    </main>
    <Footer></Footer>
</template>

<script>

import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';

export default {
  components: {
      navbar,Footer,
    },

    data () {
    return {
        spaceData:[],

        date:'',
        time:'',

        // 申請資料
        name:'',
        inputState:'', //稱謂
        phone:'',
        mail:'',
        apply:'',
        
    }
  },  

  mounted(){
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

        this.getSpaceData();

  },
  methods:{
     async getSpaceData() {
              await  axios
                    .get('http://localhost/TGD104G1/public/API/space.php')

                    .then(response => {
                        this.spaceJsonData = response.data;
                        console.log('abc',this.spaceJsonData);
                    })
                    .catch(error => {
                        // console.log(error);
                    });

                    let space = sessionStorage.getItem("space");
                    
                    for(let i=0;i<this.spaceJsonData.length;i++){

                      if(space == this.spaceJsonData[i][1]){

                        this.spaceData = this.spaceJsonData[i];
                        console.log('空間資料',this.spaceData);
                      }else{

                      }
                    }

    },
  }
}
</script>
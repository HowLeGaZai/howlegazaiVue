<template>
<navbar></navbar>
    <main class="front-space">
        <smartbar></smartbar>
        <h1 class="title_space">空間總覽</h1>
        <h4 class="second_title">擔心聚會的時候吹風淋雨嗎？ 我們聽到了</h4>
    <!--  舊的
        <div class="space-list">

            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                        <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>

            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>      
            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>      
            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>      
            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                      </router-link>
                </div>
              </div>
            </div>     
             <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>     
             <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>      
            <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>     
             <div class="space">
              <div class="image space-pic">
                  <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">A102教室</h3>
                  <h5 class="space-type">活動及表演</h5>
                  <h5 class="space-size">空間大小：<span>20</span>坪</h5>
                  <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                </div>
              </div>
            </div>

           
        </div>
 -->
        <div class="space-list">
          <space-card></space-card>
        </div>
      </main>
      <Footer></Footer>
</template>

<script>
import SpaceCard from '../components/SpaceCard.vue'
import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
import smartbar from '@/components/smartbar.vue';

export default {
  components: {
      navbar,Footer,SpaceCard,smartbar
    },
}
</script>
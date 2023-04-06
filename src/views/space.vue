<template>
<navbar></navbar>
    <main class="front-space">
        <div class="smart-bar">
            <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-gray">
                    <i class="bi bi-calendar2-event-fill"></i>
                </button>
                <p class="btn-mem-p btn-font-color-gray">活動總覽</p>
              </div>
              
              <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-gray ">
                  <i class="bi bi-basket-fill"></i>
                </button>
                <p class="btn-mem-p btn-font-color-gray">團購</p>
              </div>
              
              <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-green">
                  <i class="bi bi-door-open-fill"></i>
                </button>
                <p class="btn-mem-p btn-font-color-green">空間預約</p>
              </div>
              
              
              <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-gray ">
                  <i class="bi bi-fire"></i>
                </button>
                <p class="btn-mem-p btn-font-color-gray">瓦斯表回報</p>
              </div>
              
              <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-gray">
                  
                  <i class="bi bi-hammer"></i>
                </button>
                <p class="btn-mem-p btn-font-color-gray">維修通報</p>
              </div>
              
              
              <div class="btn-member-block">
                <button type="button" class="btn-member btn-color-gray ">
              
                  <i class="bi bi-shield-fill-check"></i>
                 
                </button>
                <p class="btn-mem-p btn-font-color-gray">守望相助</p>
              </div>
        </div>
        <h2 class="title_space">空間總覽</h2>
        <h4 class="second_title">擔心聚會的時候吹風淋雨嗎？ 我們聽到了</h4>
    
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      <div class="space">
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
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>

           
        </div>
      </main>
      <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  components: {
      navbar,Footer,
    },
}
</script>
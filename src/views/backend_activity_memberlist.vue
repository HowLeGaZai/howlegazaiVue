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
            <h1>樂採櫻桃 參加名單</h1>

            <div class="displayflex">
              <div class="displayflex margintop18">
                <button type="button" class="btn-10-s btn-color-green">
                  <i class="bi bi-cloud-arrow-down-fill"></i> 匯出資料
                </button>

              </div>

            </div>

          </div>
          <div class="bk-activity-member-list">

            <table class=" back-table-2">

              <tbody>
                <tr>

                  <td>報名序號</td>
                  <td>報名日期</td>
                  <td>身份</td>
                  <td>聯絡電話</td>
                  <td>電子信箱</td>
                  <td>刪除</td>

                </tr>
                <tr>

                  <td>QA149229195</td>
                  <td>2022-03-12</td>
                  <td>報名人：李戶長 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229195</td>
                  <td>2022-03-12</td>
                  <td>參加人：李中巴 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229195</td>
                  <td>2022-03-12</td>
                  <td>參加人：李上巴 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229195</td>
                  <td>2022-03-12</td>
                  <td>參加人：李下巴 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229194</td>
                  <td>2022-03-12</td>
                  <td>報名人：李維 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229194</td>
                  <td>2022-03-12</td>
                  <td>參加人：李維 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>
                <tr>

                  <td>QA149229193</td>
                  <td>2022-03-12</td>
                  <td>報名人：陳妙麗 小姐</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>
                <tr>

                  <td>QA149229193</td>
                  <td>2022-03-12</td>
                  <td>參加人：陳哈利 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

                </tr>

                <tr>

                  <td>QA149229193</td>
                  <td>2022-03-12</td>
                  <td>參加人：李榮恩 先生</td>
                  <td>0919440299</td>

                  <td>zxc140zxc140@gmail.com</td>

                  <td><button type="button" class="btn-icon">
                      <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                    </button>
                  </td>

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
  mounted() {
    
    }





  }





</script>
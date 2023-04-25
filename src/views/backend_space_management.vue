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
                    <!-- 空間總覽 -->
                    <div class="w90percentage accounttable bk-space-management">
                        <h1>預約列表</h1>
                        <div class="displayflex justifycontent">

                            <div class="displayflex textalignleft">
                                <!-- <div class="marginright20">
                            <label for="selecte" class="f-label">分類</label>
                            <select name="" id="selecte" class="f-select">
                            <option value="1">全部</option>
                            <option value="2">旅遊</option>
                            <option value="3">健康</option>
                            <option value="4">藝文</option>
                            <option value="5">其他</option>
                            </select>
                        </div> -->
                                <!-- <div>
                            <label for="selecte" class="f-label">上架狀態</label>
                            <select name="" id="selecte" class="f-select">
                            <option value="1">全部</option>
                            <option value="2">上架中</option>
                            <option value="3">已下架 </option>

                            </select>
                        </div> -->
                            </div>

                        </div>
                        <div class="">

                            <table class=" back-table-2 bk-space-management-table">

                                <tbody>
                                    <tr>
                                        <td>單號</td>
                                        <td>預約人</td>
                                        <td>申請人電話</td>
                                        <td>預約空間</td>
                                        <td>預約時段</td>
                                        <td>用途</td>
                                    </tr>
                                    <tr v-for="(order, index) in jsonData" :key="index">
                                        <td>001</td>
                                        <td>{{ order.APPLY_NAME }}</td>
                                        <td>{{ order.APPLY_PHONE }}</td>
                                        <td>{{ order.NAME }}</td>
                                        <td>{{ order.REV_DATE }} <br>{{ order.START_CLOSE_TIME }}</td>
                                        <td>{{ order.PURPOSE }}</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <!-- 頁碼還沒寫完 -->

                        <ul class="btn-page-block">
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
                            <li><button class="btn-page btn-color-green">1</button></li>
                            <li><button class="btn-page btn-color-white">2</button></li>
                            <li><button class="btn-page btn-color-white">3</button></li>
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button>
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

import backendNavbar from '../components/backendNavbar.vue';
import Footer from '../components/Footer.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'

export default {
  components: {
    backendNavbar,Footer,backCalender,BackLeftNav,mobileNotSupport
    },
    data() {
        return {
            jsonData: [],
        };
    },
    mounted() {

    axios
     .get('http://localhost/TGD104G1/public/API/backend_space_order.php')
        // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);

        })
        .catch(error => {
            // console.log(error);
        });
  },
}
</script>
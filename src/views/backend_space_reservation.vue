<template>
    <backendNavbar></backendNavbar>
    <div class="body-sec">
        <main class="backpadding">

                <backCalender></backCalender>

            <section class="container-main">
                <!------- 補這裡：後台側欄選單 ------->
                <BackLeftNav></BackLeftNav>
                <!------- 補這裡：後台側欄選單 ------->

                <div class="section_right">
                    <!-- 待審核預約 -->
                    <div class="w90percentage accounttable bk-space-reservation">
                        <h1>待審核預約</h1>

                        <div class="">
                            <table class=" back-table-2 back-table-space-reservation">
                                <tbody>
                                    <tr>
                                        <td>待審核</td>
                                        <td>訂單號碼</td>
                                        <!-- <td>申請單位</td> -->
                                        <td>預約人</td>
                                        <td>預約空間</td>
                                        <td>預約原因</td>
                                    </tr>
                                    <tr v-for="(order, index) in jsonData" :key="index">
                                        <td><i class="bi bi-check" @click="confirm(index)"> </i><i class="bi bi-x"
                                                @click="cancel(index)"></i></td>
                                        <!-- 按下 X <i class="bi bi-x"></i> 會跳出彈跳視窗強制填寫取消原因，這個頁面不知道在哪裡 -->
                                        <td>{{ order.ID }}</td>
                                        <!-- <td>美安</td> -->
                                        <td>{{ order.APPLY_NAME }}</td>
                                        <td>{{ order.NAME }}</td>
                                        <td>{{ order.PURPOSE }}</td>
                                        <!-- <td>001</td>
                                <td>美安</td>
                                <td>張迪生</td>
                                <td>大湖里A102室</td>
                                <td>辦理直銷活動</td>-->
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



                </div>
            </section>
        </main>
        <!------ 補這裡：不支援手機畫面 ------>
        <div :class="bodyClass" class="nosupport">
            <main>
                <section class="noSupport">
                    <a href="#">
                        <div>
                            <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                            <h1>歹勢！後台目前不支援手機</h1>
                            <img class="cat" src="../assets/img/Cat.png" alt="">
                            <p>下班請休息，我們明天再忙！</p>
                        </div>
                    </a>
                </section>
            </main>

        </div>
        <!------ 補這裡：不支援手機畫面 ------>
    </div>
    <Footer></Footer>
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import 'jquery-ui-dist/jquery-ui.min.css';
import Footer from './Footer.vue';

export default {
    data() {
        return {
            jsonData: [],
        };
    },
    components: {
        backendNavbar, Footer, backCalender,
        BackLeftNav
    },
    mounted() {
        $('#resizable').resizable({});
        $('#datepicker').datepicker({
            monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
            dayNamesMin: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
            dateFormat: "yy/mm/dd",

            onSelect: function () {
                var selected = $(this).val();
                $('.selectedD').html(`日期:&nbsp` + selected);
                // console.log(selected);

                // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
                // console.log(dayNamesMin);
            }
        });
       

        axios
            .get('http://localhost/TGD104G1/public/API/backend_space_reservation.php')
            // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                this.jsonData = response.data;
                console.log(response.data);

            })
            .catch(error => {
                // console.log(error);
            });



    },
    methods: {
        confirm(index) {

            const formData = new FormData()
            formData.append('ID', this.jsonData[index].ID)

            axios
                .post('http://localhost/TGD104G1/public/API/backend_space_reservation_confirm.php', formData)
                // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
                .then(response => {
                    // console.log(response.data);
                })
                .catch(error => {
                    // console.log(error);
                });
            alert("審核通過")
            location.reload();

        },
        cancel(index) {
            const formData = new FormData()
            formData.append('ID', this.jsonData[index].ID)

            axios
                .post('http://localhost/TGD104G1/public/API/backend_space_reservation_cancel.php', formData)
                // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
                .then(response => {
                    // console.log(response.data);
                })
                .catch(error => {
                    // console.log(error);
                });

            location.reload();
        },






    }
}
</script>
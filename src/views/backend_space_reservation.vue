<template>
    <backendNavbar></backendNavbar>
    <div class="body-sec">
        <main class="backpadding">
            <backCalender></backCalender>
            <section class="container-main">
                <BackLeftNav></BackLeftNav>
                <section class="section_right">
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
    data() {
        return {
            jsonData: [],
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
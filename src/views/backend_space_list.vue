<template>
    <backendNavbar></backendNavbar>
    <div class="body-sec">
        <main class="backpadding">
            <backCalender></backCalender>
            <section class="container-main">
                <BackLeftNav></BackLeftNav>
                <section class="section_right">
                    <!-- 空間總覽 -->
                    <div class="w90percentage accounttable bk-space">
                        <h1>空間總覽</h1>
                        <div class="displayflex justifycontent">

                            <div class="displayflex textalignleft">

                            </div>
                            <div class="displayflex margintop18">
                                <router-link :to="{ name: 'backend_space_add' }" type="button"
                                    class="btn-10-s btn-color-green marginright20 bk_addSpace">
                                    <i class="bi bi-plus-lg"></i> 新增空間
                                </router-link>
                            </div>
                        </div>
                        <div class="">

                            <table class="back-table-2 bk-space-table">

                                <tbody>
                                    <tr>
                                        <td>空間編號</td>
                                        <td>空間名稱</td>
                                        <td>預約數</td>
                                        <td>連結</td>
                                        <!-- <td>編輯</td> -->
                                        <td>刪除</td>

                                    </tr>
                                    <tr v-for="(space, index) in jsonData" :key="index">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ space.NAME }}</td>
                                        <td>{{ space.COUNT }}</td>
                                        <td>
                                            <!-- <button type="button" class="btn-icon" onclick="window.open('#/space_info', '_blank')"> -->
                                            <button type="button" class="btn-icon" @click="spaceInfo(index)">
                                                <i class="bi bi-link-45deg btn-font-color-green"></i>
                                            </button>
                                        </td>

                                        <!-- <td><button type="button" class="btn-icon">
                                                <i class="bi bi-pencil-square btn-font-color-green"></i>
                                            </button>
                                        </td> -->

                                        <td><button type="button" class="btn-icon" @click="deleteSpace(space.ID)">
                                                <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                                            </button>
                                        </td>

                                    </tr>





                                </tbody>

                            </table>
                        </div>

                        <!-- 頁碼 -->
                        <!-- <ul class="btn-page-block">
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
                            <li><button class="btn-page btn-color-green">1</button></li>
                            <li><button class="btn-page btn-color-white">2</button></li>
                            <li><button class="btn-page btn-color-white">3</button></li>
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button>
                            </li>
                        </ul> -->
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
            orderData: [],
            spaceID: '',
        };
    },
    components: {
      backendNavbar,Footer,backCalender,BackLeftNav,mobileNotSupport
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
            .get('http://localhost/TGD104G1/public/API/backendSpace.php')
            // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                this.jsonData = response.data;
                console.log(response.data);
                const newArr = this.jsonData.map(item => {
                    return {
                        ID: item.ID,
                        NAME: item.NAME,
                        COUNT: item.COUNT === null ? 0 : item.COUNT,
                    }
                });
                console.log('new', newArr);
                this.jsonData = newArr;


            })
            .catch(error => {
                // console.log(error);
            });





    },
    methods: {
        spaceInfo(index) {
            console.log(index);
            console.log(this.jsonData[index]);
            sessionStorage.setItem("spaceID", this.jsonData[index].ID);
            sessionStorage.setItem("space", this.jsonData[index].NAME);
            this.$router.push({ name: 'space_info', params: { Id: this.jsonData[index].ID } });
        },
        deleteSpace(spaceID) {

            const formData = new FormData()
            formData.append('spaceID', spaceID)

            axios
                .post('http://localhost/TGD104G1/public/API/updateSpace.php', formData)
                // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
                .then(response => {
                    // this.jsonData = response.data;
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });

        }
    },
    computed: {

    }




}
</script>
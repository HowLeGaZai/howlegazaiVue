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
                    <div class="news_title">
                        <h2>新增消息</h2>
                    </div>
                    <section>
                        <label for="electionyear" class="f-label">
                            <h5>文章標題</h5>
                        </label>
                        <div class="row">
                            <div class="col-12">
                                <!-- <input type="text" class="f-text" id="lastname" value="newsdata.TITLE"> -->
                                <input type="text" class="f-text" id="lastname" v-model="title" required>

                                <!-- <input type="text" class="f-text" id="lastname" v-model="title"> -->
                                <!-- <input type="text" class="f-text" id="lastname" v-model="title"> -->

                            </div>

                            <div class="col-2">
                                <label for="electionyear" class="f-label">
                                    <h5>文章分類</h5>
                                </label>
                                <div>
                                    <select name="" id="selecte" class="f-select" v-model="category" required>
                                        <option value="1">-選擇-</option>
                                        <option value="公告">公告</option>
                                        <option value="宣導">宣導 </option>
                                        <option value="里民服務">里民服務</option>
                                        <option value="新聞分享">新聞分享</option>
                                        <option value="會議記錄">會議記錄</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-10">
                                <label for="electionyear" class="f-label">
                                    <h5 style="margin-bottom:5px">文章縮圖</h5>
                                </label>
                                <div>
                                    <PictureCropChatbanner @pic="sendnewspic" v-model="pic"></PictureCropChatbanner>
                                    <!-- <PictureCropChatbanner @result-changed="onResultChanged"></PictureCropChatbanner> -->

                                    <!-- <div class="uploading">
                                            <label class="uploadpic" for="vrep-pic">
                                                <input id="vrep-pic" type="file" />
                                                <div class="btn-10-s btn-color-green ">
                                                    <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                                </div>
                                            </label>
                                            <div class="pic-area">
                                                <div class="pic-area-box">
                                                    <img id = "vrepimg">
                                                    <span id = "fileName"></span>
                                                    <button class="trash"><i class="bi bi-trash3"></i></button>
                                                </div>
                                                <p>設計最佳建議：1000 x 1000 像素，且大小不得超過 100 KB 的圖檔</p>
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                        </div>

                        <h5>文章內容</h5>

                        <div id="container">
                            <!-- <div id="editor">
                                </div> -->
                            <Tinymce v-model="content" required></Tinymce>
                            <div>

                            </div>
                        </div>



                        <button type="button" class="savebtn btn-10-s btn-color-green" @click="newsPreview()">預覽</button>
                    </section>
                </div>
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
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import PictureCropChatbanner from "@/components/PictureCropChatbanner.vue";
import mobileNotSupport from '@/components/mobileNotSupport.vue';
// import $ from 'jquery'

import Footer from '../components/Footer.vue';
import Tinymce from "@/components/Tinymce.vue";



// import { response } from 'express';

export default {
    components: {
        backendNavbar,
        Footer,
        PictureCropChatbanner,
        Tinymce,
        backCalender,
        BackLeftNav,
        mobileNotSupport
    },




    data() {
        return {
            category: '',
            title: '',
            pic: '',
            content: '',
            routerid: '',
            newsdata: [],

        };
    },
    methods: {
        sendnewspic(data) {
            this.pic = data;
        },
        //     onResultChanged(result) {
        //       this.PdataURL = result.dataURL;
        //   },


        newsPreview() {
            console.log(this.title);  //不可刪除
            // 檢查必填欄位是否已經填寫
            //檢查this.title或this.category或this.content是否為空值
            // if (this.title !== '' && this.category !== '' && this.content !== '') 
            if (this.title !== '' || this.category !== '' || this.content !== '' || this.pic !== '') {
                

                // 將資料傳至sessionStorage
                sessionStorage.setItem('news-title', this.title);
                sessionStorage.setItem('news-category', this.category);
                sessionStorage.setItem('news-content', this.content);
                
                sessionStorage.setItem('news-pic', this.pic);



                // 轉往預覽頁
                const Id = this.$route.params.Id;
                console.log(Id)
                this.$router.push({ name: 'news_info_preview', params: { Id: Id } });

            } else {
                alert("有欄位尚未填寫完畢");
            }




        },

        // checksavedNews(){
        //     const routerid = this.$route.params.Id;
        // console.log(routerid);

        // const searchid = new FormData();
        // searchid.append('routerid', routerid);
        // axios
        //     .post('http://localhost/TGD104G1/public/API/check_duplicate_news.php', searchid)
        //     .then(response => {
        //         // this.$set(this.data,'saveNewsdata',this.newsdata)
        //         this.newsdata = response.data;
        //         // console.log(this.newsdata);
        //         console.log("routerid重複");

        //     })
        //     .catch(error => {
        //         console.log(error);
        //     });




        //將撈取出的routerID塞進input value中

        checksavedNews() {
            //檢查是否有重複routerID
            const routerid = this.$route.params.Id;
            console.log(routerid);

            const searchid = new FormData();
            searchid.append('routerid', routerid);
            axios
                .post('http://localhost/TGD104G1/public/API/check_duplicate_news.php', searchid)
                .then(response => {
                    // this.$set(this.data,'saveNewsdata',this.newsdata)

                    this.newsdata = response.data[0];

                    if (sessionStorage.getItem('news-title') !== null) {
                        this.title = sessionStorage.getItem("news-title");
                        this.category = sessionStorage.getItem("news-category");
                        this.content = sessionStorage.getItem("news-content");
                        this.pic = sessionStorage.getItem("news-pic");

                    } else {
                        this.title = this.newsdata.TITLE;
                        this.category = this.newsdata.CATEGORY;
                        this.content = this.newsdata.CONTENT;
                        this.pic = this.newsdata.PIC;




                    }
                    // console.log(this.newsdata);
                    // console.log("routerid重複");
                    // console.log(this.newsdata + "newsid");

                    // this.setNewsvalue();

                })
                .catch(error => {
                    console.log(error);
                });

        },

        // setNewsvalue() {
        //     // console.log(this.newsdata)
        //     if (this.newsdata == null) {
        //         // console.log('null')
        //         this.title = sessionStorage.getItem("news-title");
        //         this.category = sessionStorage.getItem("news-category");
        //         this.content = sessionStorage.getItem("news-content");
        //         this.pic = sessionStorage.getItem("news-pic");

        //         // console.log(this.newsdata)

        //     } else {
        //         // console.log(this.newsdata.TITLE)

        //         // this.title = this.newsdata.TITLE;
        //         // this.category = this.newsdata.CATEGORY;
        //         // this.content = this.newsdata.CONTENT;
        //         // this.pic = this.newsdata.PIC;

        //         // this.category = this.newsdata.CATEGORY;


        //     }
        // }

    },
    mounted() {

        this.checksavedNews()
        // this.setNewsvalue()


        //進頁面前檢查是否有重複routerID
        // const routerid = this.$route.params.Id;
        // console.log(routerid);

        // const searchid = new FormData();
        // searchid.append('routerid', routerid);
        // axios
        //     .post('http://localhost/TGD104G1/public/API/check_duplicate_news.php', searchid)
        //     .then(response => {
        //         // this.$set(this.data,'saveNewsdata',this.newsdata)
        //         this.newsdata = response.data[0];
        //         // console.log(this.newsdata);
        //         console.log("routerid重複");
        //         this.setNewsvalue();

        //     })
        //     .catch(error => {
        //         console.log(error);
        //     });

        // this.checksavedNews()





    },




}
</script>

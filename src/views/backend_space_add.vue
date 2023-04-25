<template>
    <backendNavbar></backendNavbar>

    <div class="body-sec">
        <main class="backpadding">
            <backCalender></backCalender>

            <section class="container-main">
                <BackLeftNav></BackLeftNav>
                <section class="section_right ">
                    <!-- 新增空間 -->
                    <div class="bk-activity-add">
                        <h1>新增空間</h1>
                        <div  name="activity-add">

                            <!-- 空間名稱 -->
                            <section>
                                <!-- <h5>空間名稱</h5> -->
                                <div class="row">
                                    <div class="col-12">
                                        <label for="spaceName" class="f-label">空間名稱</label>
                                        <input type="text" class="f-text" id="spaceName" placeholder="範例：多媒體影音室" v-model="spaceName">
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-12">
                                        <label for="spaceName" class="f-label">開放時間</label>
                                        
                                        <div class="row bk_spaceDate">
                                            <label class="f-checkbox">全選
                                                <input type="checkbox" name="multichoice" >
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期一
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期二
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期三
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期四
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期五
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期六
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期日
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>
                                </div> -->

                                <!-- 時間 -->
                                <div class="row bk_spaceTime">
                                    <div class="col-3">
                                        <label for="spaceTimeStart" class="f-label">時間</label>
                                        <input type="text" class="f-text" id="spaceTimeStart" placeholder="範例：08:00" v-model="spaceTimeStart">
                                    </div>
                                    <div class="col-1">
                                        <label class="f-label to">至</label>
                                    </div>
                                    <div class="col-3">
                                        <label for="spaceTimeStart" class="f-label">&nbsp;</label>
                                        <input type="text" class="f-text" id="spaceTimeStart" placeholder="範例：22:00" v-model="spaceTimeClose">
                                    </div>
                                </div>
                            </section>

                            <section>
                                <h5>空間地點</h5>
                                <div class="row">
                                    <div class="col-2">
                                        <label for="city" class="f-label">縣市</label>
                                        <input type="text" class="f-text" id="city" placeholder="範例：花蓮縣" v-model="city">
                                    </div>
                                    <div class="col-2">
                                        <label for="district" class="f-label">鄉鎮區</label>
                                        <input type="text" class="f-text" id="district" placeholder="範例：國安鄉" v-model="district">
                                    </div>
                                    <div class="col-2">
                                        <label for="village" class="f-label">里</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：大湖里" v-model="village">
                                    </div>
                                    <div class="col-6">
                                        <label for="village" class="f-label">詳細地址</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：幸福路123號3樓" v-model="address">
                                    </div>
                                </div>
                            </section>

                            <!-- 場地資訊 -->
                            <section>
                                <h5>場地資訊</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="type" class="f-label">性質</label>
                                        <input type="text" class="f-text" id="type" placeholder="範例：閱讀教室、會議" v-model="type">
                                    </div>
                                    <div class="col-6">
                                        <label for="district" class="f-label">坪數</label>
                                        <input type="text" class="f-text" id="district" placeholder="範例：14坪" v-model="spaceSize">
                                    </div>
                                    <div class="col-6">
                                        <label for="village" class="f-label">空間容納人數上限</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：200人" v-model="capacity">
                                    </div>     
                                </div>
                            </section>

                            <!-- 管理人資訊 -->
                            <section>
                            <h5>管理人資訊</h5>
                            <div class="row">
                                <div class="col-4">
                                    <label for="city" class="f-label">管理人姓名</label>
                                    <input type="text" class="f-text" id="city" placeholder="範例：李上巴" v-model="manager">
                                </div>
                                <div class="col-4">
                                    <label for="district" class="f-label">聯絡電話</label>
                                    <input type="text" class="f-text" id="district" placeholder="範例：09128123125" v-model="phone">
                                </div>
                                <div class="col-4">
                                    <label for="village" class="f-label">備用聯絡電話</label>
                                    <input type="text" class="f-text" id="village" placeholder="範例：0919426284" v-model="secondPhone">
                                </div>     
                            </div>
                        </section>

                        <!-- 預約須知 -->
                        <section>
                            <h5>預約須知</h5>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="" id="" cols="30" rows="10" class="f-text" placeholder="" v-model="note"></textarea>
                                </div>
                            </div>
                        </section>

                        <!-- 空間照片 -->
                        <section>
                            <h5>空間照片</h5>
                            <picture-crop @pic="sendpic"></picture-crop>
                            <!-- <div class="row">
                                <input type="file" class="f-file">
                            </div> -->
                        </section>

                        <!-- 送出按鈕-->
                        <button type="submit" class="btn-m btn-color-gray" onclick="location.href='./activity.html'" >取消</button>
                        <!-- 是否有預覽頁-->
                        <!-- <button type="submit" class="btn-m btn-color-green" onclick="location.href='./activity.html'" >送出</button> -->
                        <button type="submit" class="btn-m btn-color-green"  @click="send">送出</button>
                    </div >
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
    import backCalender from '../components/BackCalender.vue';
    import BackLeftNav from '../components/BackLeftNav.vue';
    import mobileNotSupport from '@/components/mobileNotSupport.vue';
    import Footer from '../components/Footer.vue';
    import PictureCrop from '../components/PictureCrop.vue';


    export default {
                data(){
                    return{
                        spaceName:'',
                        spaceTimeStart:'',
                        spaceTimeClose:'',
                        city:'',
                        district:'',
                        village:'',
                        address:'',
                        type:'',
                        spaceSize:'',
                        capacity:'',
                        manager:'',
                        phone:'',
                        secondPhone:'',
                        note:'',
                        pic:'',
                    }
                },
                components: {
                    backendNavbar, Footer, PictureCrop,backCalender,BackLeftNav,mobileNotSupport
                },
                mounted() {
                    // ======nav的收合======
                    let beMenu = document.querySelectorAll(".be-menu");
                    let beMenuOn = document.querySelectorAll(".be-nav-on");
                    // let beMenu = document.querySelectorAll("be-nav");
                    // console.log(beMenu);

                    for (let i = 0; i < beMenu.length; i++) {
                        beMenu[i].addEventListener("click", function () {
                            beMenuOn[i].classList.toggle('be-nav-off');
                            //   console.log(beMenu[i]);
                        })
                    }
                },
                methods:{
                    send(){
                    const formData = new FormData()
                    formData.append('spaceName', this.spaceName)
                    formData.append('spaceTimeStart', this.spaceTimeStart)
                    formData.append('spaceTimeClose', this.spaceTimeClose)
                    formData.append('city', this.city)
                    formData.append('district', this.district)
                    formData.append('village', this.village)
                    formData.append('address', this.address)
                    formData.append('type', this.type)
                    formData.append('spaceSize', this.spaceSize)
                    formData.append('capacity', this.capacity)
                    formData.append('manager', this.manager)
                    formData.append('phone', this.phone)
                    formData.append('secondPhone', this.secondPhone)
                    formData.append('note', this.note)
                    formData.append('pic', this.pic)

                        axios
                            .post('http://localhost/TGD104G1/public/API/spaceAdd.php', formData)
                            // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
                            .then(response => {
                                // this.jsonData = response.data;
                                console.log(response.data);
                            })
                            .catch(error => {
                                console.log(error);
                            });

                        // this.city='';
                        // this.district='';
                        // this.village='';
                    },
            sendpic(data){
                this.pic = data;
        
            }
        }
    }
</script>
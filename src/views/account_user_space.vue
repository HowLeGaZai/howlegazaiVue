<template>
    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
        <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :PORTRAIT="PORTRAIT"></Accountsidebar>
                <section class="account-content">
                    <h1 class="marginbottom30">空間預約紀錄</h1>
                  
                      <table class="account-table w90percentage marginbottom20 account-table_space">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="(data,index) in datas" :key="index" >
                            <td data-label="預約日期">{{data.REV_DATE}}</td>
                            <td data-label="狀態">{{ data[2] == 1 ? '已成功' : data[2] == 0 ? '待審核' : data[2] == -1 ? '未通過' : '已取消' }}</td>
                            <td data-label="預約原因">{{data.PURPOSE}}</td>
                            <td data-label="預約時間">{{ formattedStartTime(data.REV_START_TIME) }}~{{ formattedEndTime(data.REV_END_TIME) }}</td>
                            <td data-label="預約空間">
                                <router-link class="titlelink" :to="{ name: 'space_info', params: { Id: data.SPACE_ID } }">
                                    <button type="button" class="btn-icon"><i class="bi bi-link-45deg btn-font-color-green"></i></button>
                                </router-link></td>
                            <td data-label="取消"><button type="button" class="btn-m btn-color-green btn_cancel" @click="showLightBox(index)" v-if=" data[2] == 1 || data[2] == 0">取消</button></td>
                        </tr>
                    
                      </table>  
                      <lightBox :title="lightboxData.title"
                                :category="lightboxData.category"
                                :CANCEL="lightboxData.CANCEL"
                                :note="lightboxData.note"
                                :btn="lightboxData.btn"
                                @updatedCANCEL="getCancel">
                      </lightBox>
                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>
import navbar from './navbar.vue';
import Accountsidebar from '@/components/Accountsidebar.vue';
import lightBox from '../components/lightBox.vue';

export default {
    data(){
        return {
            ID:'',
            REV_DATE:'',
            PURPOSE:'',
            NAME:'',
            REV_START_TIME:'',
            REV_END_TIME:'',
            STATUS:'',
            CANCEL:'',
            PORTRAIT:"",
            isLightBoxVisible: false,

            lightboxData: {
                title: '取消原因',
                category: ['交通', '誤按', '不需要了', '其它'],
                note: '請於預約日3日前取消，若超過日期需取消，請聯繫里辦',
                CANCEL:'',
                btn: '同意取消',
            },

            datasTrs:[
                '預約日期','狀態','預約事由','預約時間','空間', '取消'
            ],

            datas:[      
            ],

        
    
            }
    },

    mounted(){

        const userId = this.getCookieValue("id");
        const url = "http://localhost/TGD104G1/public/API/account_space.php";
        const data = new FormData();
        data.append('user_id', userId)
        
        axios
            .post(url, data)
            .then((response) => {
                const data = response.data;
                this.datas = data;
            })
            .catch((error) => {
                console.error(error);
            });


            // //lightBox的JS
            // let lightbox_el = document.getElementById("lightbox");
            // let btnCancel = document.querySelectorAll(".btn_cancel") ;
            // let btn_modal_close = document.getElementsByClassName("btn_modal_close")[0];
            // //    console.log(btnCancel);
            // for(let i = 0; i < btnCancel.length; i++){
            //     btnCancel[i].addEventListener("click",function(e){
            //     // console.log(e.target);
            //     lightbox_el.classList.remove("none");
            // });

            //     btn_modal_close.addEventListener("click", function(){
            //     lightbox_el.classList.add("none");
            //     });
            // }
                
    },
    methods: {
        getCookieValue(cookieName) {
            const cookies = document.cookie.split("; ");
            for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].split("=");
            if (cookie[0] === cookieName) {
                return cookie[1];
            }
            }
            return null;
        },

        formatTime(timeString) {
            const [hour, minute] = timeString.split(":");
            return `${hour}:${minute}`;
        },
        formattedStartTime(startTime) {
            return this.formatTime(startTime);
        },
        formattedEndTime(endTime) {
            return this.formatTime(endTime);
        },

        showLightBox(index) {
            this.lightboxVisible = true;
            document.getElementById("lightbox").classList.remove("none");
            this.ID = this.datas[index][0];

        },
        
        getCancel(cancelData) {
            // console.log('分類：', data.selectValue);
            // console.log('取消原因：', data.textareaValue);
            const ID = this.ID;

            const CANCEL = cancelData.selectValue + "," + cancelData.textareaValue;
            const cancelSTATUS = -2;
            this.STATUS = cancelSTATUS;
            const STATUS = this.STATUS;

            const url = 'http://localhost/TGD104G1/public/API/updateAccountSpace.php';
            const data = new FormData();
                data.append('ID', ID);
                data.append('STATUS', STATUS);
                data.append('CANCEL', CANCEL);
    
            axios
                .post(url, data)
                .then(function (response) {
                    if (response.data.status === 'success') {
                        alert(response.data.message); // 顯示儲存成功訊息
                    } else {
                        alert('取消失敗'); // 顯示儲存失敗訊息
                    };
                });
    
            
            location.reload();

            // updateAccountSpace.php
        },
    },
    components:{
        navbar,lightBox,Accountsidebar
    },
    computed: {

    },
    watch: {
    async getResult() {
      this.dataURL = this.$refs.PortraitCrop.getResult(dataURL);
    }
  },
        
}
</script>
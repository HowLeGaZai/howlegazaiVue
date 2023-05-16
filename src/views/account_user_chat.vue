<template>
    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
    <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :localPORTRAIT="localPORTRAIT"></Accountsidebar>
                <section class="account-content">
                    <h1 class="marginbottom30">貼文刊登紀錄</h1>
                  
                      <table class="account-table w90percentage marginbottom20 account-table_chat">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="(data,index) in datas" :key="index">
                            <td data-label="發布日期">{{ formatDate(data.CREATE_TIME) }}</td>
                            <td data-label="狀態">{{ data.STATUS == 1 ? '已上架' : '已下架' }}</td>
                            <td data-label="TITLE:"><router-link class="titlelink" :to="{ name: 'chat_info', params: { Id: data.ID } }">
                                {{data.TITLE}}
                                </router-link></td>
                            <td data-label="">
                                <router-link :to="{ name: 'chat_update', params: { Id: data.ID } }" v-show="data.STATUS == 1">
                                    <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                                </router-link>
                                <button @click="articleDel" type="button" class="btn-icon" v-if="data.STATUS != -1"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button>
                            </td>
                            <td data-label="永久下架">
                                <button @click="articleDel" type="button" class="btn-icon" v-if="data.STATUS != -1"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button>
                            </td>
                        </tr>
                      </table>

                      <div class="nodata">
                        <p v-if="datas.length == 0">您還沒發佈過貼文喔！</p>
                      </div>
                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>
import navbar from '../components/navbar.vue';
import Accountsidebar from '@/components/Accountsidebar.vue';
export default {
     data(){
        return {
            userId:"",
            CREATE_TIME:'',
            TITLE:'',
            ID:'',
            CONTENT:'',
            STATUS:'',
            localPORTRAIT:"",
            
            datasTrs:[
                '發布日期', '狀態', '貼文標題', '編輯', '永久下架'
            ],

            datas:[
            ],
        }
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

        formatDate(dateTimeStr) {
            const dateObj = new Date(dateTimeStr);
            const year = dateObj.getFullYear();
            const month = dateObj.getMonth() + 1;
            const date = dateObj.getDate();
            return `${year}-${month}-${date}`;
        },
        
        getID(){
            this.ID = this.datas[0].ID;
        },
        
        articleDel(){
            this.getID();
            const ID = this.ID;
            const requestData = {
                    STATUS: -1
                };
            const STATUS = requestData.STATUS;

            const url = 'http://localhost/TGD104G1/public/API/updateAccountChat.php';
            const data = new FormData();
            data.append('ID', ID);
            data.append('STATUS', STATUS);

            axios
                .post(url, data)
                .then(function (response) {
                    if (response.data.status === 'success') {
                        alert(response.data.message); // 顯示儲存成功訊息
                    } else {
                        alert('下架失敗'); // 顯示儲存失敗訊息
                    };
                });

            
            location.reload();
        },

    },
    mounted(){
        this.localPORTRAIT = localStorage.getItem("portrait");

        const userId = this.getCookieValue("id");
        const url = "http://localhost/TGD104G1/public/API/account_chat.php";
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
        
    },
    components:{
        navbar,
        Accountsidebar,
    }
}
</script>
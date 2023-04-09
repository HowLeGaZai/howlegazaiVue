<template>
     <div class="space" v-for="(space,index) in spaces" :key="index">
              <div class="image space-pic">
                  <img :src="require(`@/assets/img/${space.SPACE_PIC}`)" alt="">
              </div>
              <div class="space-info">
                  <h3 class="space-title">{{space.NAME}}</h3>
                  <h5 class="space-type">{{space.CATEGORY}}</h5>
                  <h5 class="space-size">空間大小：<span>{{space.SPACE_SIZE}}</span>坪</h5>
                  <h5 class="space-add">地址：{{space.ADDRESS}}</h5>
                  <div class="space-btn">
                      <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">我要預約</button>
                        </router-link>
                    <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_info'">我要預約</button> -->
                </div>
              </div>
            </div>      
</template>

<script>

export default {
    data(){
                return {
                    
                    spaces: [
                    {
                        "NAME": "A102教室",
                        "CATEGORY": "教室 / 靜態會議活動 / 讀書會",
                        "CAPACITY": 40,
                        "SPACE_SIZE": 20,
                        "NOTE": "",
                        "MANAGER": "李上巴",
                        "MANAGER_PHONE": "0919426289",
                        "OPEN_DATE": "2023-06-30",
                        "OPEN_TIME": "08：00",
                        "CLOSE_TIME": "21：00",
                        "ADDRESS": "花蓮縣大湖里南京東路三段219號4樓",
                        "REMARK": "",
                        "CHAIR": "",
                        "MIC": "",
                        "TABLE": "",
                        "AIRCON": 1,
                        "EXTENSION": "",
                        "SPACE_PIC": "s_1.png",
                    },
                    {
                        "NAME": "B102教室",
                        "CATEGORY": "教室 / 靜態會議活動 / 讀書會",
                        "CAPACITY": 40,
                        "SPACE_SIZE": 20,
                        "NOTE": "",
                        "MANAGER": "李中巴",
                        "MANAGER_PHONE": "0911223344",
                        "OPEN_DATE": "2023-06-30",
                        "OPEN_TIME": "08：00",
                        "CLOSE_TIME": "21：00",
                        "ADDRESS": "花蓮縣大湖里南京東路三段219號5樓",
                        "REMARK": "",
                        "CHAIR": "",
                        "MIC": "",
                        "TABLE": "",
                        "AIRCON": 1,
                        "EXTENSION": "",
                        "SPACE_PIC": "s_1.png",
                    },
                    {
                        "NAME": "活動中心",
                        "CATEGORY": "藝文/表演",
                        "CAPACITY": 2000,
                        "SPACE_SIZE": 100,
                        "NOTE": "",
                        "MANAGER": "李下巴",
                        "MANAGER_PHONE": "0912345678",
                        "OPEN_DATE": "2023-06-30",
                        "OPEN_TIME": "08：00",
                        "CLOSE_TIME": "21：00",
                        "ADDRESS": "花蓮縣大湖里大湖路2號1樓",
                        "REMARK": "",
                        "CHAIR": "",
                        "MIC": "",
                        "TABLE": "",
                        "AIRCON": 1,
                        "EXTENSION": "",
                        "SPACE_PIC": "s_1.png",
                    },
                        {
                        "NAME": "C202教室",
                        "CATEGORY": "教室 / 靜態會議活動 / 讀書會",
                        "CAPACITY": 50,
                        "SPACE_SIZE": 33,
                        "NOTE": "",
                        "MANAGER": "李下巴",
                        "MANAGER_PHONE": "0912345678",
                        "OPEN_DATE": "2023-06-30",
                        "OPEN_TIME": "08：00",
                        "CLOSE_TIME": "21：00",
                        "ADDRESS": "花蓮縣大湖里大湖路2號1樓",
                        "REMARK": "",
                        "CHAIR": "",
                        "MIC": "",
                        "TABLE": "",
                        "AIRCON": 1,
                        "EXTENSION": "",
                        "SPACE_PIC": "s_1.png",
                    },
                    ],
                }
            },
            methods: {
                
            },
            mounted() {
                //axios
                //axios.get('event.json').then(res => this.events = res.data) 
                // axios.get('PHP/activity.json').then(res => this.events = res.data) 
                // axios.get('PHP/activity.json').then((res) => {
                //     console.log(res.data)
                // })

            },
}
</script>
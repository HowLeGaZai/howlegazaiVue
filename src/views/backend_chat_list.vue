<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
       <backCalender></backCalender>

      <section class="container-main">

        <BackLeftNav></BackLeftNav>
        
        <section class="section_right">
          <div class="w90percentage accounttable bk-chat">
            <h1>討論區列表</h1>
            <div class="displayflex justifycontent bk-filter">

              <div class="displayflex textalignleft">
                <div class="marginright20">
                  <label for="selecte" class="f-label">分類</label>
                  <select name="" id="selecte" class="f-select" v-model="selectedCategory">
                    <option value="">所有話題</option>
                    <option value="美食討論">美食討論</option>
                    <option value="二手交易">二手交易</option>
                    <option value="里民閒聊">里民閒聊</option>
                    <option value="團購討論">團購討論</option>
                    <option value="我要抱怨">我要抱怨</option>
                    <option value="其他">其他</option>
                  </select>
                </div>
                <div>
                  <label for="date" class="f-label">發布日期</label>
                  <select name="" id="date" class="f-select" v-model="selectedDate">
                      <!-- <option value="">-選擇-</option> -->
                      <option value="">最新至最舊</option>
                      <option value="old">最舊至最新 </option>
                  </select>
              </div>
              </div>


            </div>
            <div class="">

              <table class=" back-table-2 bk-table-chat">

                <tbody>
                  <tr>
                    <td class="bk-chat-type">分類</td>
                    <td class="bk-chat-title">文章標題</td>
                    <td class="bk-chat-date">發佈日期</td>
                    <td class="bk-chat-account">發佈用戶</td>
                    <td class="bk-chat-link">連結</td>
                    <td class="bk-chat-state">上架狀態</td>
                  </tr>

                  <tr v-for="(chat, index) in filteredItems" :key="index">
                    <td>{{ chat[1] }}</td> <!-- 發布類別 -->
                    <td>{{ chat[2] }}</td>   <!-- 標題 -->
                    <td>{{ new Date(chat[3]).toLocaleDateString() }}</td> <!-- 時間 -->
                    <td>{{ chat[4] }}</td> <!-- 用戶名稱 -->
                
                   
                    <td><button type="button" class="btn-icon" @click="chatInfo(index)">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td id="toggle">
                      <label class="switch">
                        <input type="checkbox" :checked="parseInt(chat[6]) === 1" @click="onoff(index)">
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>
                </tbody>

              </table>

            </div>
            <!-- 頁碼 -->
            <ul class="btn-page-block">
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
              <li><button class="btn-page btn-color-white">1</button></li>
              <li><button class="btn-page btn-color-green">2</button></li>
              <li><button class="btn-page btn-color-white">3</button></li>
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
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
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import backendNavbar from '../components/backendNavbar.vue';
import Footer from '../components/Footer.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';


export default {
  data() {
    return {
      jsonData: [],
      selectedCategory: '',
      selectedDate: '',
    }
  },
  components: {
    backendNavbar, Footer,backCalender,BackLeftNav,mobileNotSupport
  },
  computed :{


     filteredItems: function() {
      let filteredChats = this.jsonData;
      // 類別篩選
      if (this.selectedCategory) {
        filteredChats = filteredChats.filter(jsonData => {
          return jsonData[1] === this.selectedCategory;
        });
      }
      // 日期排序
      if (this.selectedDate === '') {
        filteredChats = filteredChats.sort((a, b) => new Date(b[3]) - new Date(a[3]));
      } else if (this.selectedDate === 'old') {
        filteredChats = filteredChats.sort((a, b) => new Date(a[3]) - new Date(b[3]));
      }
      return filteredChats;
    }
 
  },
  beforeMount() {

      axios
      //  htdocs的環境下測試
      .get('http://localhost/TGD104G1/public/API/backendChat.php')
      // .get('https://tibamef2e.com/tgd104/g1/backendChat.php')
      .then(response => {
        this.jsonData = response.data;
        console.log(response.data);
        console.log(typeof this.jsonData[0][6])
      })
      .catch(error => {
        // console.log(error);
      });

  },
  methods:{
    chatInfo(index){
      // this.$router.push({ name: 'chat_info', params: { Id: this.filteredItems[index][0] } });
      window.open(`/chat_info/${this.filteredItems[index][0]}`, '_blank');
    },
    onoff(index) {
      // console.log(index);
      console.log(this.jsonData[index]);
      console.log('ID是' + this.jsonData[index][0]);
      // this.jsonData[index][6] = this.jsonData[index][6] == 1 ? 0 : 1; // 切換 0 和 1
      this.jsonData[index][6] = parseInt(this.jsonData[index][6]) === 1 ? '0' : '1';
      console.log('狀態' + this.jsonData[index][6]);

    
      const updateData = new FormData()
      updateData.append('chatid', this.jsonData[index][0])
      updateData.append('onoff', this.jsonData[index][6])

      axios
        // .post('https://tibamef2e.com/tgd104/g1/accountOverview.php', {index:this.jsonData[index][0]})
        .post('http://localhost/TGD104G1/public/API/manageChat.php', updateData)
        .then(response => {
          // this.jsonData = response.data;
          console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });
      // location.reload(); 
      this.$router.go(0);
    }
  },

}
</script>
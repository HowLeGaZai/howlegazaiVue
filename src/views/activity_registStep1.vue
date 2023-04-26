<template>
  <navbar></navbar>
  <main class="activity_info">
    <div class="info_topic">
      <h1>報名資訊填寫</h1>
      <h2>{{ activityData.TITLE }}</h2>
    </div>

    <div class="threesteps">
      <div class="steps">
        <div class="steps-circle">1</div>
        <h5>填寫資料</h5>
      </div>
      <div class="line notyet"></div>
      <div class="steps">
        <div class="steps-circle">2</div>
        <h5>確認資料</h5>
      </div>
      <div class="line notyet"></div>
      <div class="steps">
        <div class="steps-circle">3</div>
        <h5>報名完成</h5>
      </div>
    </div>

    <div class="info-article">
      <table class="green-table">
        <thead>
          <tr>
            <th colspan="4">活動資訊</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-6">活動名稱</td>
            <td class="col-2">單價</td>
            <td class="col-2">數量</td>
            <td class="col-2">總計</td>
          </tr>
          <tr class="row">
            <td class="col-6">
              <div class="image event_pic">
                <img :src="activityData.BANNER" alt="" />
              </div>
              <span>{{ activityData.TITLE }}</span>
            </td>
            <td class="col-2">NT$ {{ activityData.PRICE }}</td>
            <td class="col-2">
              <input
                class="f-text"
                type="number"
                id="register_num2"
                v-model="inputValue"
                min="1"
                max="3"
                @input="multiplyInput"
              />人
              <!-- <button class="btnUp"><i class="bi bi-caret-up-fill"></i></button> -->
              <!-- <button class="btnDown"><i class="bi bi-caret-down-fill"></i></button> -->
            </td>
            <td class="col-2">NT$ {{ result }}</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4"></td>
          </tr>
        </tfoot>
      </table>

      <div class="">
        <!-- <form class="" id="idFormAioCheckOut" method="post" action="https://tibamef2e.com/tgd104/g1/API/ECPay_CreateOrder.php"> -->
        <table class="green-table">
          <thead>
            <tr>
              <th colspan="4">報名人資料 （報名人資料將作為聯繫代表人）</th>
            </tr>
          </thead>
          <tbody>
            <tr class="row left">
              <td>
                <h4>參加人1</h4>
              </td>
            </tr>
            <tr class="row left">
              <td>
                <label class="f-checkbox"
                  >同報名者
                  <input
                    type="checkbox"
                    name="multichoice"
                    v-model="isChecked"
                    @change="handleChange"
                  />
                  <span class="checkmark"></span>
                </label>
              </td>
            </tr>
            <tr class="row">
              <td class="col-md-2">
                <label for="name" class="f-label">姓名</label>
                <input type="text" class="f-text" v-model="inputParticipant.names[0]" />
              </td>
              <td class="col-md-2">
                <label for="inputState" class="f-label">稱謂</label>
                <select id="inputState" class="f-select" v-model="inputParticipant.inputState[0]">
                  <option selected value="male">先生</option>
                  <option value="female">女士</option>
                </select>
              </td>
              <td class="col-md-4">
                <label for="phone" class="f-label">電話</label>
                <input type="text" class="f-text" v-model="inputParticipant.phone[0]" />
              </td>
              <td class="col-md-4">
                <label for="mail" class="f-label"> Email</label>
                <input type="email" class="f-text" v-model="inputParticipant.mail[0]" />
              </td>
            </tr>
          </tbody>
          <tbody v-for="n in inputValue - 1" :key="n">
            <tr class="row left">
              <td>
                <h4>參加人{{ n + 1 }}</h4>
              </td>
            </tr>
            <tr class="row">
              <td class="col-md-2">
                <label for="name" class="f-label">姓名</label>
                <input type="text" class="f-text" id="name" v-model="inputParticipant.names[n]" />
              </td>
              <td class="col-md-2">
                <label for="inputState" class="f-label">稱謂</label>
                <select id="inputState" class="f-select" v-model="inputParticipant.inputState[n]">
                  <option selected value="male">先生</option>
                  <option value="female">女士</option>
                </select>
              </td>
              <td class="col-md-4">
                <label for="phone" class="f-label">電話</label>
                <input type="text" class="f-text" id="phone" v-model="inputParticipant.phone[n]"  />
              </td>
              <td class="col-md-4">
                <label for="mail" class="f-label"> Email</label>
                <input type="email" class="f-text" id="mail" v-model="inputParticipant.mail[n]" />
              </td>
            </tr>
          </tbody>
          <tbody>
            <!-- <tr class="row left">
                        <td>
                            <button class="btn-10-m btn-color-greenborder"><i class="bi bi-plus"></i>新增參加人</button>
                        </td>
                    </tr> -->
            <tr class="row right">
              <td>
                報名單價:NT$ <span>{{ activityData.PRICE }}</span>
              </td>
            </tr>
            <tr class="row right">
              <td>
                報名人數: <span>{{ inputValue }}</span
                >人
              </td>
            </tr>
            <tr class="row right">
              <td>
                費用共計:NT$<span>{{ result }}</span>
              </td>
            </tr>

            <tr class="row right">
              <td>
                <p class="alert">
                  注意：若經查證後參加者非本里住民，將取消參加資格。
                </p>
              </td>
            </tr>
            <tr class="row right">
              <td><button class="btn-m btn-color-white">取消</button></td>
              <td>
                <button class="btn-m btn-color-green" @click="submitorder">
                  確認付款
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4"></td>
            </tr>
          </tfoot>
        </table>

        <!-- ECPay Start-->
        <!-- <div style="display: none;">
                <label>
                    編號 (MerchantTradeNo):不可重複使用。英數字大小寫混合
                    <input type="text" name="MerchantTradeNo" :value="time" class="form-control"/>
                </label>
                <label class="col-xs-12">
                    時間 (MerchantTradeDate):yyyy/MM/dd HH:mm:ss
                    <input type="text" name="MerchantTradeDate" :value="currentDate" class="form-control"/>
                </label>
                <label class="col-xs-12">
                    類型 (PaymentType):aio (信用卡)
                    <input type="text" name="PaymentType" value="aio" class="form-control"/>
                </label>
                <label class="col-xs-12">
                    金額 (TotalAmount):需帶整數，不可有小數點 僅限新台幣 金額不可為 0 元 CVS&BARCODE 最低限制為 30 元，最高限制為 30,000 元
                    <input type="text" name="TotalAmount" v-model="result"  class="form-control"/>
                </label>
                <label class="col-xs-12">
                    描述 (TradeDesc):
                    <input type="text" name="TradeDesc" v-model="activityData.TITLE" class="form-control"/>
                </label>
                <label class="col-xs-12">
                    名稱 (ItemName):
                    <input type="text" name="ItemName" v-model="itemName" class="form-control"/>
                    商品名稱以符號 # 分
                </label>
                <label class="col-xs-12">
                    付款方式 (ChoosePayment):
                    <input type="text" name="ChoosePayment" value="Credit"/>
                    Credit:信用卡及 AndroidPay AndroidPay: AndroidPay  WebATM:網路 ATM ATM:自動櫃員機 CVS:超商代碼 BARCODE:超商條碼 ALL:不指定
                </label>
            </div> -->
        <!-- ECPay End -->
      </div>

      <!-- img的容器設定為原大小的95% -->
    </div>
  </main>
  <Footer></Footer>
</template>

<script>
import navbar from "../components/navbar.vue";
import Footer from "../components/Footer.vue";
import axios from "axios";

export default {
  data() {
    return {
      // activityJsonData:[],
      activityData: [],
      jsonData: [],
      inputValue: 1,
      result: "",
      data: [],

      // 申請人資料
      name: "",
      inputState: "", //稱謂
      phone: "",
      mail: "",
      apply: "",

      isChecked: false,

    inputParticipant: {
      names: ['', '', ''],
      inputState: ['', '', ''],
      phone: ['', '', ''],
      mail: ['', '', '']
    },

      // 參加者資料

    };
  },

  components: {
    navbar,
    Footer,
  },
  setup() {
    return {
      modules: [Navigation],
    };
  },
  // mounted() {

  //     this.getActivityData();
  // },
  mounted() {
    this.getActivityData();

    // this.time = Date.now();
    // const now = new Date();
    // const year = now.getFullYear();
    // const month = (now.getMonth() + 1).toString().padStart(2, "0");
    // const day = now.getDate().toString().padStart(2, "0");
    // const hours = now.getHours().toString().padStart(2, "0");
    // const minutes = now.getMinutes().toString().padStart(2, "0");
    // const seconds = now.getSeconds().toString().padStart(2, "0");
    // this.currentDate = `${year}/${month}/${day} ${hours}:${minutes}:${seconds}`;
  },

  computed: {

    result() {
      if (this.inputValue !== null) {
        return this.inputValue * this.activityData.PRICE;
      }
      return 0;
    },
  },

  methods: {
    async getActivityData() {
      const actID = this.$route.params.Id;

      const actdata = new FormData();
      actdata.append("routeid", actID);
      await axios
        //  htdocs的環境下測試
        .post("http://localhost/TGD104G1/public/API/activityinfo.php", actdata)
        .then((response) => {
          this.activityData = response.data[0];
        })
        .catch((error) => {
        });
    },

    handleChange() {
      if (this.isChecked == true) {
        const formData = new FormData();
        formData.append("user_id", this.getCookieValue("id"));
        axios
          .post(
            "http://localhost/TGD104G1/public/API/account_user.php",
            formData
          )
          .then((response) => {
            this.jsonData = response.data;
            // console.log(this.jsonData[0]);
            this.inputParticipant.names[0] = this.jsonData[0].FULL_NAME;
            this.inputParticipant.phone[0] = this.jsonData[0].PHONE;
            this.inputParticipant.mail[0] = this.jsonData[0].EMAIL;
            this.inputParticipant.inputState[0] = this.jsonData[0].GENDER;
          })
          .catch((error) => {
            console.log(error);
          });
      } 
      else {
         (this.inputParticipant.names[0] = ""),
          ( this.inputParticipant.phone[0] = ""),
          ( this.inputParticipant.mail[0] = ""),
          ( this.inputParticipant.inputState[0]= "");
      }
    },
    getCookieValue(cookieName) {
      // 讀取指定名稱的 Cookie 值
      const cookieStr = decodeURIComponent(document.cookie);
      const cookies = cookieStr.split("; ");
      for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split("=");
        if (cookie[0] === cookieName) {
          return cookie[1] || null;
        }
      }
      return null;
    },
submitorder() {
    this.sendOrder();
},

sendOrder() {
    const formData = new FormData();
    formData.append('USER_ID', this.getCookieValue('id'))
    formData.append('attendeeNum', this.inputValue)
    formData.append('cost', this.inputValue * this.activityData.PRICE)
    formData.append('ACTIVITY_ID', this.activityData.ID)

    axios
        .post('http://localhost/TGD104G1/public/API/sendActOrder.php', formData)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
            this.sendAttend();
        })
        .catch(error => {
            // console.log(error);
        });
},

sendAttend() {
    const attendDetail = new FormData();
    attendDetail.append('ATTEND_NAME', this.inputParticipant.names)
    attendDetail.append('ATTEND_GENDER', this.inputParticipant.inputState)
    attendDetail.append('ATTEND_MAIL',this.inputParticipant.mail)
    attendDetail.append('ATTEND_PHONE', this.inputParticipant.phone)

    axios
        .post('http://localhost/TGD104G1/public/API/sendActAttend.php', attendDetail)
        .then(response => {
            // this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            // console.log(error);
        });
},
    // 傳值給 ECPay
    // methods: {
    //   sendComment(e) {
    //     // const data = JSON.stringify({
    //     //     USER_ID:this.USER_ID,
    //     //     PORTRAIT:this.PORTRAIT,
    //     //     NICKNAME:this.NICKNAME,
    //     //     CREATE_TIME:this.CREATE_TIME,
    //     //     CONTENT:this.message,

    //     // })

    //     const formData = new FormData();

    //     formData.append("ACTIVITY_ID", this.activityData.ID);
    //     formData.append("PAYMENT", this.result);
    //     formData.append("USER_ID", this.USER_ID);

    //     axios
    //       .post(
    //         "http://localhost/TGD104G1/public/API/ECPay_ReturnURL.php",
    //         formData
    //       )
    //       //.post('https://tibamef2e.com/tgd104/API/ECPay_ReturnURL.php', formData)
    //       .then((response) => {
    //         // this.jsonData = response.data;
    //         console.log(response.data);
    //       })
    //       .catch((error) => {
    //         console.log(error);
    //       });

    //     this.$emit("message", data);
    //     // console.log(this.message);
    //     this.message = "";
    //   },
    // },

    // getFromSessionStorage() {
    //   // 從sessionStorage中取得inputValue和result的值
    //   const inputValue = sessionStorage.getItem("inputValue");
    //   console.log(inputValue);
    //   const result = sessionStorage.getItem("result");

    //   // 將取得的值設定到data中
    //   if (inputValue !== null) {
    //     this.inputValue = inputValue;
    //   }
    //   if (result !== null) {
    //     this.result = result;
    //   }
    // },

    // 傳值給ECPay CreateOrder
    // submitForm() {
    //   axios
    //     .post("http://localhost/TGD104G1/public/API/ECPay_CreateOrder.php", {
    //       //axios.post('https://tibamef2e.com/tgd104/API/ECPay_CreateOrder.php', {
    //       MerchantTradeNo: this.MerchantTradeNo,
    //       MerchantTradeDate: this.MerchantTradeDate,
    //       PaymentType: this.PaymentType,
    //       TotalAmount: this.result,
    //       TradeDesc: this.TradeDesc,
    //       ItemName: this.ItemName,
    //       ChoosePayment: this.ChoosePayment,
    //     })
    //     .then((response) => {
    //       console.log(response.data);
    //     })
    //     .catch((error) => {
    //       console.log(error);
    //     });
    // },
  },
};


</script>
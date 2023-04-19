<template>
  <navbar></navbar>
  <div class="bgc">
    <main>
      <div class="center">
        <h2 class="p-10">戶長註冊</h2>
        <div class="step_2">
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
          </div>
        </div>

        <div class="signup1">
          <div class="row">
            <!-- 選擇縣市 -->
            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">縣/市</label>
              <select name="" id="city" class="f-select">
                <option value="">{{ input1 }}</option>
              </select>
            </div>

            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">鄉/鎮/市/區</label>
              <select name="" id="district" class="f-select">
                <option value="">{{ input2 }}</option>
              </select>
            </div>

            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">村里</label>
              <select name="" id="village" class="f-select">
                <option value="">{{ input3 }}</option>
              </select>
            </div>
          </div>

          <!-- 輸入地址 -->
          <div class="txt_field">
            <label>地址</label>
            <input type="text" class="f-text label-left" id="name5" required :value="inputValue" @input="
              inputValue = $event.target.value;
                                            // add = $event.target.value;
                                          " :placeholder="placeholder" />
            <p v-if="showError" class="alert">{{ errorMessage }}</p>
            <!-- <h6 style="color: red; text-align: center"> -->
            <h6 v-if="addressError" class="alert">

              您輸入的住址已進行註冊，請嘗試聯繫註冊地址戶長。謝謝！
            </h6>
          </div>
        </div>
        <!-- 最後送出的編號 -->
        <div class="bbb">
          <router-link to="./login">
            <button type="button" class="btn-m btn-color-white">返回</button>
          </router-link>
          <router-link to="./signup2">
            <button type="button" class="btn-m btn-color-green" @click.prevent="submitForm">
              註冊
            </button>
          </router-link>
        </div>
      </div>
    </main>
  </div>
  <Footer></Footer>
</template>

<script>
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";


// import { ref } from 'vue';

export default {
  components: {
    Footer,
    navbar,
  },
  data() {
    return {
      showError: false,
      addressError: false, //
      errorMessage: "不能空白",
      input1: "",
      input2: "",
      input3: "",
      inputValue: "",
      jsonData: [],
    };
  },
  setup() {
    return {};
  },
  methods: {
    //不能輸入空值的函式
    submitForm() {
      let formData = new FormData();
      if (this.inputValue.trim() === "") {
        this.showError = true;
        return false;
      } else {
        this.showError = false;
      }

      this.checkAddress(result => {
        if (result) {
          // console.log("可以喔");
          formData.append("input1", this.input1);
          formData.append("input2", this.input2);
          formData.append("input3", this.input3);
          formData.append("input4", this.inputValue);
          this.$router.push({ name: "signup2", state: formData })

        } else {
          // console.log("不行喔");
          this.addressError = true;   
          this.showError = false;     
        }
      });

    },

    //判斷住址是否重複註冊
    checkAddress(e) {
      const formData = new FormData()
      formData.append('address', this.inputValue);
      console.log(this.inputValue);
      axios.post('http://localhost/TGD104G1/public/API/address_verification.php', formData)
        .then(response => {
          const result = response.data;
          console.log(result)
          if (result === "duplicate_address") {
            // console.log("重複了");
            e(false);
          } else {
            // console.log("可過");
            // this.submitForm;
            e(true);
            // return true;

          }
        })
        .catch(error => {
          console.log("error");
        })
    },


    webInfo() {

      this.input1 = this.jsonData[this.jsonData.length - 1].CITY;
      this.input2 = this.jsonData[this.jsonData.length - 1].DISTRICT;
      this.input3 = this.jsonData[this.jsonData.length - 1].TOWN;
      console.log(this.input2);

    },

  },

  watch: {
    // 可以使用 watch 來監聽數據的更改並將它們存儲在 localStorage中，
    // 當 input1, input2, input3 或 inputValue 發生更改時
    // input1(val) {
    //   localStorage.setItem("input1", val);
    // },
    // input2(val) {
    //   localStorage.setItem("input2", val);
    // },
    // input3(val) {
    //   localStorage.setItem("input3", val);
    // },
    inputValue(val) {
      localStorage.setItem("address", this.input1 + this.input2 + this.input3 + val);
    },
  },
  mounted() {


  },
  created() {
    axios
      .post('http://localhost/TGD104G1/public/API/home.php', {})
      .then(response => {
        this.jsonData = response.data;
        // alert(response.data)
        console.log(this.jsonData[this.jsonData.length - 1].CITY);
        this.webInfo();
        // console.log(this.jsonData.length);
        // console.log(this.jsonData);
      })
      .catch(error => {
        // console.log(error);
      });
  },
  computed: {
    placeholder() {
      return '請從"' + this.input1 + this.input2 + this.input3 + '"後開始填寫';
    }
  }
};

// localStorage.setItem('myData', this.myData);
</script>
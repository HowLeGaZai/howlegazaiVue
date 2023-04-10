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
              <h5>報名完成</h5>
            </div>
          </div>
        </div>

        <form class="signup1">

        <div class="row">
          <!-- 選擇縣市 -->
          <div class="txt_field col-sm-12 col-sm-4">
            <label for="selecte" class="f-label">縣/市</label>
            <select name="" id="selecte" class="f-select">
                <option value="1">花蓮縣</option>
            </select>
          </div>
          <!-- <div class="txt_field">
            <h5>縣/市</h5>
            <input
              type="text"
              class="f-text label-left"
              id="name5"
              placeholder="花蓮市"
              disabled
            />
          </div> -->
          <!-- <div class="txt_field">
            <h5>鄉/鎮/市/區</h5>
            <input
              type="text"
              class="f-text label-left"
              id="name5"
              placeholder=""
              disabled
            />
          </div> -->

          <!-- 選擇鄉鎮 -->
          <div class="txt_field col-sm-12 col-sm-4">
            <label for="selecte" class="f-label">鄉/鎮/市/區</label>
            <select name="" id="selecte" class="f-select">
                <option value="1">國安鄉</option>
            </select>
          </div>
          <!-- <div class="txt_field">
            <h5>里</h5>
            <input
              type="text"
              class="f-text label-left"
              id="name5"
              placeholder="大湖里"
              disabled
            />
          </div> -->

          <!-- 選擇里名 -->
          <div class="txt_field col-sm-12 col-sm-4">
            <label for="selecte" class="f-label">村里</label>
            <select name="" id="selecte" class="f-select">
                <option value="1">大湖里</option>
            </select>
          </div>

        </div>

          <!-- 輸入地址 -->
          <div class="txt_field">
            <label>地址</label>
            <input
              type="text"
              class="f-text label-left"
              id="name5"
              v-model="inputvalue"
              required
              onsubmit="return validateForm()"
            />
            <!-- <h6 style="color: red; text-align: center"> -->
            <h6 class="alert">
              您輸入的住址已進行註冊，請嘗試聯繫註冊地址戶長。謝謝！
            </h6>
          </div>

        </form>
        <!-- 最後送出的編號 -->
        <div class="bbb">
          <a href="#/login"
            ><button type="button" class="btn-m btn-color-white">
              返回
            </button></a
          >
          <a href="#/signup2"
            ><button type="button" class="btn-m btn-color-green" @click="submitForm">
              註冊
            </button></a
          >
        </div>
      </div>
    </main>
  </div>
  <Footer></Footer>
</template>

<script>
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";

const mydata = {
  name: 'John',
  age: 30,
  email: 'john@example.com'
}

export default {
  components: {
    Footer,
    navbar,
  },
  data() {
    return {
      inputValue: ""
    }
  },
  setup() {
    return {};
  },
  methods: {
    validateForm() {
			var inputField = document.getElementById("myInput");
			var inputValue = inputField.value;
			if (inputValue == "") {
				document.getElementById("error").innerHTML = "This field cannot be empty.";
				return false;
			}
			return true;
		}
    // submitForm() {
    //   this.$router.push({ name: "page2", params: { inputValue: this.inputValue } });
    // }
  },

  
  mounted() {
    let labels = document.querySelectorAll(".collapsible-item-label");
    let contents = document.querySelectorAll(".collapsible-item-content");

    labels.forEach((label, index) => {
      label.addEventListener("click", () => {
        // 檢查是否已經打開
        const isOpen = label.classList.contains("open-item-label");
        const content = contents[index];
        const isContentOpen = content.classList.contains("open-item-content");

        // 移除所有元素上已經打開的樣式
        labels.forEach((label) => label.classList.remove("open-item-label"));
        contents.forEach((content) =>
          content.classList.remove("open-item-content")
        );

        // 添加或移除打開的樣式
        if (!isOpen && !isContentOpen) {
          label.classList.add("open-item-label");
          content.classList.add("open-item-content");
        }
      });
    });
  },
};

// localStorage.setItem('myData', this.myData);
</script>

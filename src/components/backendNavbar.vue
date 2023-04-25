<template>
  <header class="backend-header">
    <nav class="main">
      <div class="leftnav">
        <!-- logo -->
        <a class="brand" href="/backend_index">
          <img src="../assets/img/logo_backend.svg" alt="" />
        </a>
        <div class="midnav">
          <i class="bi bi-brightness-high"></i>
          歡迎登入<div>{{town}}</div>
        </div>
      </div>

      <!-- 里長名稱與頭像 -->
      <div class="admin-account">
        <p>里長好</p>
        <!-- 頭像 -->
        <div class="image userbtn">
            <img :src="portrait" alt="">
        </div>
      </div>
    </nav>
  </header>
</template>

<script>


export default {


  data() {
    return {
      villageData:[],
      town:'',
      portrait:'',



    }
  },

  methods: {
    
  },


 mounted() {

    // 這裡是 縣市里
    axios
      .post('http://localhost/TGD104G1/public/API/home.php',{})
      .then(response => {
        this.villageData = response.data[response.data.length-1];

        this.town = this.villageData.TOWN;
        // console.log(this.town);
        // console.log(town);
      })
      .catch(error => {
        // console.log(error);
      });

      axios
      .post('http://localhost/TGD104G1/public/API/Connection.php',{})
      .then(response => {
        this.portrait = response.data[response.data.length-1][11];

        // console.log(this.town);
        // console.log(town);
      })
      .catch(error => {
        // console.log(error);
      });


  },
}
</script>
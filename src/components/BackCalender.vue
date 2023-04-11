<template>
 <div class="container-date">
          <!-- 需渲染資料區塊 -->
          <p>西曆：{{nowdate}}</p>  
          <p>農曆：癸卯年 乙卯月 戊辰日 二月二十 </p>
          <!-- 需渲染資料區塊 -->
        </div>
</template>

<script>



export default {
  data() {
    return {
      nowdate: ''

      

      
    }
  },
  methods: {
    getCurrentDate() {
      const now = new Date();
      const year = now.getFullYear();
      const month = now.getMonth() + 1;
      const day = now.getDate();
      this.nowdate = `${year} 年 ${month.toString().padStart(2, '0')} 月 ${day.toString().padStart(2, '0')} 日`;
    },
    

  },
  mounted() {
    this.getCurrentDate();



  },
}
</script>
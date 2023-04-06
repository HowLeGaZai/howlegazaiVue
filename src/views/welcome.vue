<template>
    <div :class="bodyClass">
        <header>
            <nav class="main welcome-nav">
                <!-- logo -->
                <a class="brand" href="#">
                <img src="../assets/img/logo.svg" alt="" />
                </a>
            </nav>
        </header>
         <main>
            <section class="welcome">
                <router-link :to="{name:'home'}">
                    <div>
                        <h1>前台</h1>
                        <p>里民/居民的入口</p>
                    </div>
                </router-link>
                <router-link :to="{name:'backend_index'}">
                    <div>
                        <h1>後台</h1>
                        <p>里長/管理員的入口</p>
                    </div>
                </router-link>
            </section>
        </main>
        <Footer></Footer>  
    </div>
</template>


<script>

  // import required modules
  import Footer from './Footer.vue';
  export default {
  
  components: {
    Footer,
  },
  setup() {
    
  },
  mounted() {

  },
  data() {
    return {
      bodyClass: 'backend'
    }
  },

};


</script>
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
            <section class="noSupport">
                <a href="#">
                    <div>     
                        <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                        <h1>歹勢！後台目前不支援手機</h1>
                        <img class="cat" src="../assets/img/Cat.png" alt="">
                        <p>下班請休息，我們明天再忙！</p>
                    </div>
                </a>
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

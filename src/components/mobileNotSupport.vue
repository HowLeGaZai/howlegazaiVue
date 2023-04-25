<template>
    <div :class="bodyClass" class="nosupport">
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
      </div>
</template> 

<script>
    // import required modules
    export default {
    
        components: {
            
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

<template>
    <navbar></navbar>
    <eventCard_Info></eventCard_Info>

    <!-- ---footer---- -->
    <Footer></Footer>
</template>

<script>

import eventCard_Info from '../components/EventCard_Info.vue';
import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';

export default {

    components:{
        navbar,
        Footer,
        eventCard_Info,
    },
}
</script>
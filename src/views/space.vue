<template>
<navbar></navbar>
    <main class="front-space">
        <smartbar></smartbar>
        <h1 class="title_space">空間總覽</h1>
        <h4 class="second_title">擔心聚會的時候吹風淋雨嗎？ 我們聽到了</h4>
        <div class="space-list">
          <space-card></space-card>
        </div>
      </main>
      <Footer></Footer>
</template>

<script>
import SpaceCard from '../components/SpaceCard.vue'
import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
import smartbar from '@/components/smartbar.vue';

export default {
  components: {
      navbar,Footer,SpaceCard,smartbar
    },
}
</script>
<template>
  <div>
    <div>
      <label for="category">類別：</label>
      <select id="category" v-model="selectedCategory">
        <option value="">全部</option>
        <option value="公告">公告</option>
        <option value="宣導">宣導</option>
        <option value="經費報告">經費報告</option>
      </select>
    </div>
    <div>
      <label for="date">發布日期：</label>
      <select id="date" v-model="selectedDate">
        <option value="">全部</option>
        <option value="new">最新至最舊</option>
        <option value="old">最舊至最新</option>
      </select>
    </div>
    <div v-for="item in filteredItems" :key="item.id">
      <h2>{{ item.title }}</h2>
      <p>{{ item.content }}</p>
      <p>{{ item.category }}</p>
      <p>{{ item.date }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { id: 1, title: '消息1', content: '消息1內容', category: '公告', date: '2022-01-01' },
        { id: 2, title: '消息2', content: '消息2內容', category: '宣導', date: '2022-01-02' },
        { id: 3, title: '消息3', content: '消息3內容', category: '經費報告', date: '2022-01-03' },
        { id: 4, title: '消息4', content: '消息4內容', category: '公告', date: '2022-01-04' },
      ],
      selectedCategory: '',
      selectedDate: '',
    };
  },
  computed: {
    filteredItems() {
      let filteredItems = this.items;
      if (this.selectedCategory) {
        filteredItems = filteredItems.filter((item) => item.category === this.selectedCategory);
      }
      if (this.selectedDate === 'new') {
        filteredItems = filteredItems.sort((a, b) => new Date(b.date) - new Date(a.date));
      } else if (this.selectedDate === 'old') {
        filteredItems = filteredItems.sort((a, b) => new Date(a.date) - new Date(b.date));
      }
      return filteredItems;
    },
  },
};
</script>

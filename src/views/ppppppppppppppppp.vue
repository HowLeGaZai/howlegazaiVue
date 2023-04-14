<template>
  <div>
    <h1>{{ message }}</h1>
    <button @click="changeMessage">Change message</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: 'Hello, world!'
    }
  },
  methods: {
    changeMessage() {
      this.message = 'Bonjour, le monde!'
    }
  }
}
</script>

<template>
  <div>
    <input v-model="username" type="text" placeholder="Username">
    <input v-model="password" type="password" placeholder="Password">
    <button @click="login">Login</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      username: '',
      password: '',
      fakeUser: {
        username: '勞改營',
        password: 'testpass'
      }
    }
  },
  methods: {
    login() {
      // Check if the entered credentials match the fake user credentials
      if (this.username === this.fakeUser.username) {
        alert('Login successful!');
        // Redirect to the home page or some other page
      } else {
        alert('Invalid username or password!');
      }
    }
  }
}
</script>

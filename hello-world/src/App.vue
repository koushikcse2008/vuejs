<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <p> &nbsp; {{ multiple(50) }} </p>
  <HelloWorld msg="Hello World!!"/>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  data() {
    return {
      baseValue: 10
    }
  },
  components: {
    HelloWorld
  },
  methods: {
    multiple(num) {
      return num*this.baseValue
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

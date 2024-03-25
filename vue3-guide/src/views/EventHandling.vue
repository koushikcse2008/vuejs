<template>
    <h2 class="text-danger border-bottom border-danger fw-bold">Event Handling</h2>
    <button class="btn btn-info" @click="count++">Counter: Add 1</button>
    <p>Count is: {{ count }}</p>

    <button class="btn btn-danger" @click="greet">Greet</button> <br /> <br />

    <button class="btn btn-primary" @click="say('hello')">Say hello</button> <br /> <br />
    <button class="btn btn-warning" @click="say('bye')">Say bye</button>
</template>
<script>
export default {
  name: 'EventHandling',
  data() {
    return {
      //enter variable
      count: 0,
      name: 'Vue.js'
    }
  },
  methods: {
  greet(event) {
    // `this` inside methods points to the current active instance
    alert(`Hello ${this.name}!`)
    // `event` is the native DOM event
    if (event) {
      alert(event.target.tagName)
    }
  },
  say(message) {
    alert(message)
  }
}
}
</script>
  
  
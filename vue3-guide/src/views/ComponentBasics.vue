<template>
  <h2 class="text-danger border-bottom border-danger fw-bold">Component Basics</h2>

  <button class="btn btn-warning" @click="count++">You clicked me {{ count }} times.</button>

  <br /><br /><h4>Here is a child component!</h4>
  <ButtonCounter />
</template>
<script>
import ButtonCounter from '../components/ButtonCounter.vue';

export default {
  name: 'ComponentBasics',
  components: {
    ButtonCounter
  },
  data() {
    return {
      //enter variable
      count: 0
    }
  }
}
</script>
<template>
  <h2 class="text-danger border-bottom border-danger border-2 fw-bold">Conditional Rendering</h2>
  
  <button @click="awesome = !awesome" class="btn btn-info">Toggle</button>

  <p v-if="awesome">Vue is awesome!</p>
  <p v-else>Oh no 😢</p>

  <p class="fw-bold">if / else if / else: </p>
  <div v-if="type === 'A'">
    A
  </div>
  <div v-else-if="type === 'B'">
    B
  </div>
  <div v-else-if="type === 'C'">
    C
  </div>
  <div v-else>
    Not A/B/C
  </div>

  <p>Template Block if condition: </p>
  <template v-if="ok">
    <div class="border border-2 border-success p-2">
      <h6>Title</h6>
      <p>Paragraph 1</p>
      <p>Paragraph 2</p>
    </div>  
  </template>

  <p class="mb-0">v-show: </p>
  <p v-show="ok">v-show directive</p>



</template>

<script>
export default {
  name: 'ConditionalRendering',
  data() {
    return {
      //enter variable
      awesome: true,
      type: "A",
      ok: true
    }
  }
}
</script>
  
  
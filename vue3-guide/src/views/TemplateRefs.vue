<template>
  <h2 class="text-danger border-bottom border-danger fw-bold">Template Refs</h2>

  <input ref="input" />

  <ul>
    <li v-for="item in list" ref="items" :key="item.id">
      {{ item }}
    </li>
  </ul>
</template>
<script>
export default {
  name: 'TemplateRefs',
  data() {
    return {
      //enter variable
      list: [
        {
          "id": 1, "name": "Item 1"
        },
        {
          "id": 2, "name": "Item 2"
        },
        {
          "id": 3, "name": "Item 3"
        }
      ]
    }
  },
  mounted() {
    console.log(this.$refs.items);
    this.$refs.input.focus()
  }
}
</script>
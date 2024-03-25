<template>
    <h2 class="text-danger border-bottom border-danger border-2 fw-bold">List Rendering</h2>

    <p class="fw-bold">For loop:</p>
    <ul>
      <li v-for="(item, index) in items" :key="item.id">
        {{ parentMessage }} - {{ index }} - {{ item.message }}
      </li>
    </ul>

    <p class="fw-bold">Single Object with for loop:</p>
    <ul>
      <li v-for="(value, index) in myObject" :key="index">
        {{ index }} - {{ value }}
      </li>
    </ul>

    <p class="fw-bold">For loop with 10:</p>
    <p v-for="n in 10" :key="n">{{ n }}</p>

    <p class="fw-bold">For with if condition:</p>
    <template v-for="item in items" :key="item.message">
      <li>{{ item.message }}</li>
    </template>
    <p>&nbsp;</p>

    <p class="fw-bold">With computed functions:</p>
    <li v-for="n in evenNumbers" :key="n">{{ n }}</li>

    <p>&nbsp;</p>
  </template>
  <script>
  export default {
    name: 'ListRendering',
    data() {
      return {
        //enter variable
        items: [{ id: 1, message: 'Foo' }, { id: 2, message: 'Bar' }],
        parentMessage: 'Parent',
        myObject: {
          title: 'How to do lists in Vue',
          author: 'Jane Doe',
          publishedAt: '2016-04-10'
        },
        numbers: [1, 2, 3, 4, 5]
      }
    },
    computed: {
      evenNumbers() {
        return this.numbers.filter(n => n % 2 === 0)
      }
    }
  }
  </script>
  
  
<template>
    <h2 class="text-danger border-bottom border-danger fw-bold">Computed Properties</h2>
    <p>Compuited Properties: {{ calculateBooksMessage() }}</p>

    <p>Full Name:  {{ fullName }}</p>

</template>
<script>
export default {
name: 'ComputedProperties',
data() {
    return {
    //enter variable
        author: {
            name: 'John Doe',
            books: [
            'Vue 2 - Advanced Guide',
            'Vue 3 - Basic Guide',
            'Vue 4 - The Mystery'
            ]
        },
        firstName: 'John',
        lastName: 'Doe'
    }    
},
methods: {
  calculateBooksMessage() {
    return this.author.books.length > 0 ? 'Yes' : 'No'
  }
},
computed: {
    fullName: {
      // getter
      get() {
        return this.firstName + ' ' + this.lastName
      },
      // setter
      set(newValue) {
        // Note: we are using destructuring assignment syntax here.
        [this.firstName, this.lastName] = newValue.split(' ')
      }
    }
  }
}
</script>
  
  
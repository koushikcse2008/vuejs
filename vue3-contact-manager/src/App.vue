<template>
  <div class="container">
    <Header />
        <div class="container1">
          <router-view/>
        </div>
    <Footer />
  </div>
</template>

<script>
import Header from '@/components/common/Header.vue';
import Footer from '@/components/common/Footer.vue';

export default {
  components: {
    Header,
    Footer
  }
};
</script>


<style>
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
} */

.container1 {
  background-color: #f1f1f1;
  padding: 20px;
  min-height: 500px;
}

a.router-link-active {
  border-bottom: 1px solid #d9d9d9;
  color: #fff !important;
}

li.selected {
  border-bottom: 1px solid #d9d9d9;
  color: red;
}
</style>

<template>
  <div class="container">
  <nav class="mt-4">
    <router-link to="/" class="btn btn-success mr-2">Home</router-link>
    <router-link to="/inline-style" class="btn btn-primary mr-2">Inline Style</router-link>
    <router-link to="/internal-style" class="btn btn-warning mr-2">Internal Style</router-link> 
    <router-link to="/external-style" class="btn btn-danger">External Style</router-link>
  </nav>
  <hr />
  
  <router-view />
</div>
</template>


<style>
body {
  font-size: 30px;
  text-align: center;
}
</style>

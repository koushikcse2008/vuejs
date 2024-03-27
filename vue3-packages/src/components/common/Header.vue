<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ps-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vue JS 3 Packages</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/axios" class="nav-link">Axios</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/bootstrap" class="nav-link">Bootstrap</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/font-awesome" class="nav-link">Font Awesome</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/gridlayout" class="nav-link">Grid Layout</router-link>
        </li> 
        <li class="nav-item">
            <router-link to="/jquery" class="nav-link">Jquery</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/json-server" class="nav-link">Json Server</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/metatitle" class="nav-link">Meta Title</router-link>
        </li>  
        <li class="nav-item">
            <router-link to="/sweetalert2" class="nav-link">Sweet Alert 2</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/toastify" class="nav-link">Toastify</router-link>
        </li>              
      </ul>
    </div>
  </div>
</nav>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style scoped>
a.nav-link {
    color: white !important;
}
</style>
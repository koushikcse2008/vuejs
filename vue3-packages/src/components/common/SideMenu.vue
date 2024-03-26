<template>

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
            <router-link to="/metatitle" class="nav-link">Meta Title</router-link>
        </li>  
        <li class="nav-item">
            <router-link to="/sweetalert2" class="nav-link">Sweet Alert 2</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/toastify" class="nav-link">Toastify</router-link>
        </li>
      </ul>
    
</template>

<script>
export default {
    name: "SideMenu"
};
</script>

<style scoped>
a.nav-link {
    border-bottom: 1px solid #000 !important;
    color: #000 !important;
    font-weight: normal;
    border-radius: 6px;
    padding-left: 10px;
}

a.nav-link:hover, a.router-link-active {
  border-bottom: 2px solid #DC3545 !important;
  color: #DC3545 !important;
  font-weight: bold !important;
  border-radius: 6px;
  padding-left: 10px;
}
</style>
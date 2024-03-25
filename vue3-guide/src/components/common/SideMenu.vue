<template>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/setup" class="nav-link">Setup</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/template-syntax" class="nav-link">Template Syntax</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/computed-properties" class="nav-link">Computed Properties</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/style-bindings" class="nav-link">Style Bindings</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/class-bindings" class="nav-link">Class Bindings</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/conditional-rendering" class="nav-link">Conditional Rendering</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/list-rendering" class="nav-link">List Rendering</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/event-handling" class="nav-link">Event Handling</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/form-input-binding" class="nav-link">Form Input Binding</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/lifecycle-hooks" class="nav-link">Lifecycle Hooks</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/watchers" class="nav-link">Watchers</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/template-refs" class="nav-link">Template Refs</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/component-basics" class="nav-link">Component Basics</router-link>
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
<template>
  <div class="row">
    <div class="col-lg-12">
      <h4>Welcome to the Vue JS 3 Guideline</h4>
      <p>Here I am trying to collaborate all the basic functionality in a example way so that whenever any revision needed, just download this codebase and revise within few minutes. Also it is quick to review as it elaborate in the example form.</p>

      <p>This examples have been tested in local environment and will run on the server.</p>
    </div>
  </div>
  <div class="row">

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Application Setup</h5>
          <p class="card-text">This gives information regarding installation and setup.</p>
          <router-link to="/setup" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Template Syntax</h5>
          <p class="card-text">This gives information regarding template syntax.</p>
          <router-link to="/template-syntax" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Computed Properties</h5>
          <p class="card-text">This gives information regarding computed properties.</p>
          <router-link to="/computed-properties" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Style Bindings</h5>
          <p class="card-text">This gives information regarding style binding.</p>
          <router-link to="/style-bindings" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Class Bindings</h5>
          <p class="card-text">This gives information regarding class binding.</p>
          <router-link to="/class-bindings" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Conditional Rendering</h5>
          <p class="card-text">This gives information regarding comditional rendering.</p>
          <router-link to="/conditional-rendering" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">List Rendering</h5>
          <p class="card-text">This gives information regarding list rendering.</p>
          <router-link to="/list-rendering" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Event Handling</h5>
          <p class="card-text">This gives information regarding event handling.</p>
          <router-link to="/event-handling" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>
    
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Form Input Binding</h5>
          <p class="card-text">This gives information regarding form input binding.</p>
          <router-link to="/form-input-binding" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Lifecycle Hooks</h5>
          <p class="card-text">This gives information regarding lifecycle hooks.</p>
          <router-link to="/lifecycle-hooks" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Watchers</h5>
          <p class="card-text">This gives information regarding watchers.</p>
          <router-link to="/watchers" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Template Refs</h5>
          <p class="card-text">This gives information regarding Template Refs.</p>
          <router-link to="/template-refs" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Component Basics</h5>
          <p class="card-text">This gives information regarding component basics.</p>
          <router-link to="/component-basics" class="btn btn-outline-danger">Example in Action</router-link>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      msg: "Hello",
      htContent: "<strong>Message here.</strong>",
      ok: true,
      message: "Welcomes you.",
      color: "#828282"
    }
  }
}
</script>

<style scoped>
.card { min-height: 192px !important; }
.card-text { min-height: 73px !important; }
</style>

<template>
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Welcome to the Vue JS 3 Packages</h2>
      <p>Here I am trying to cover as much as packages I can. Although there are lots more packages available. I am trying tio implement packages in a example way so that whenever any revision needed, just download this codebase and revise within few minutes. Also it is quick to review as it elaborate in the example form.</p>

      <p>This examples have been tested in local environment and will run on the server.</p>
    </div>
  </div>
  <div class="row">

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Axios</h5>
          <p class="card-text">This gives information regarding axios</p>
          <router-link to="/axios" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bootstrap</h5>
          <p class="card-text">This gives information regarding bootstrap</p>
          <router-link to="/bootstrap" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Font Awesome</h5>
          <p class="card-text">This gives information regarding Font Awesome</p>
          <router-link to="/font-awesome" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grid Layout</h5>
          <p class="card-text">This gives information regarding Grid Layout</p>
          <router-link to="/gridlayout" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Jquery</h5>
          <p class="card-text">This gives information regarding jquery</p>
          <router-link to="/jquery" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Meta Title</h5>
          <p class="card-text">This gives information regarding Meta Title</p>
          <router-link to="/metatitle" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sweet Alert 2</h5>
          <p class="card-text">This gives information regarding sweet alert 2</p>
          <router-link to="/sweetalert2" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Toastify</h5>
          <p class="card-text">This gives information regarding Toastify</p>
          <router-link to="/toastify" class="btn btn-outline-danger">Example in Action</router-link> 
        </div>
      </div>
    </div>   

  </div>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    //declare var here.
  }
}
</script>

<style scoped>
.card { min-height: 192px !important; }
.card-text { min-height: 73px !important; }
</style>

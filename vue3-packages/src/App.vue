<template>
  <div class="container-fluid ps-0 pe-0">
    <Header />
    <div class="container-fluid pt-4 containerHeight bg-light">
      <div class="row">
        <div class="col-lg-2 bg-light">
          <SideMenu />
        </div>
        <div class="col-lg-10 bg-light">
          <router-view/>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from '@/components/common/Header.vue';
import Footer from '@/components/common/Footer.vue';
import SideMenu from '@/components/common/SideMenu.vue';

export default {
  components: {
    Header,
    Footer,
    SideMenu
  }
};
</script>


<style>
.container1 {
  background-color: #000;
  padding: 20px;
  min-height: 600px;
  height: 100%;
}

a.router-link-active {
  border-bottom: 1px solid #d9d9d9;
  color: #fff !important;
  font-weight: bold;
}

li.selected {
  border-bottom: 1px solid #d9d9d9;
  color: red;
}

.containerHeight {
  min-height: 800px;
}
</style>

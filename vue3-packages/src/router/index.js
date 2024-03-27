import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/axios',
    name: 'axios',
    component: function () {
      return import('../views/Axios.vue')
    }
  },
  {
    path: '/bootstrap',
    name: 'Bootstrap',
    component: function () {
      return import('../views/Bootstrap.vue')
    }
  },
  {
    path: '/font-awesome',
    name: 'FontAwesome',
    component: function () {
      return import('../views/FontAwesome.vue')
    }
  },
  {
    path: '/gridlayout',
    name: 'GridLayout',
    component: function () {
      return import('../views/GridLayout.vue')
    }
  },
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/jquery',
    name: 'Jquery',
    component: function () {
      return import('../views/Jquery.vue')
    }
  }, 
  {
    path: '/json-server',
    name: 'JsonServer',
    component: function () {
      return import('../views/JsonServer.vue')
    }
  }, 
  {
    path: '/metatitle',
    name: 'MetaTitle',
    component: function () {
      return import('../views/MetaTitle.vue')
    }
  }, 
  {
    path: '/sweetalert2',
    name: 'sweetalert2',
    component: function () {
      return import('../views/SweetAlert2.vue')
    }
  },
  {
    path: '/toastify',
    name: 'Toastify',
    component: function () {
      return import('../views/Toastify.vue')
    }
  } 
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router

import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/contact-list',
    name: 'ContactList',
    component: function () {
      return import('../views/ContactList.vue')
    }
  },
  {
    path: '/edit-contact/:id/edit',
    name: 'EditContact',
    component: function () {
      return import('../views/EditContact.vue')
    }
  },
  {
    path: '/add-contact/',
    name: 'AddContact',
    component: function () {
      return import('../views/AddContact.vue')
    }
  },
  {
    path: '/show-contact/:id',
    name: 'ShowContact',
    component: function () {
      return import('../views/ShowContact.vue')
    }
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router

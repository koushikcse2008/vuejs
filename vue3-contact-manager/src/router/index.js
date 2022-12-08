import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import ContactListView from '../views/ContactListView.vue';
import ShowContactView from '../views/ShowContactView.vue';
import AddContactView from '../views/AddContactView.vue';
import EditContactView from '../views/EditContactView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  // {
  //   path: '/contact-list',
  //   name: 'about',
  //   component: function () {
  //     return import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  //   }
  // }
  {
    path: '/contact-list',
    name: 'contactList',
    component: ContactListView
  },
  {
    path: '/add-contact',
    name: 'addContact',
    component: AddContactView
  },
  {
    path: '/edit-contact/:id',
    name: 'editContact',
    component: EditContactView
  },
  {
    path: '/show-contact/:id',
    name: 'showContact',
    component: ShowContactView
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

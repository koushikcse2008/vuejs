import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '../node_modules/bootstrap/dist/css/bootstrap.css';
import '../node_modules/jquery/dist/jquery.js';
import '../node_modules/bootstrap/dist/js/bootstrap.bundle.js';
import './assets/style.css';

createApp(App).use(router).mount('#app')

import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import InlineStyleView from "../views/InlineStyleView.vue";
import InternalStyleView from "../views/InternalStyleView.vue";
import ExternalStyleView from "../views/ExternalStyleView.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/inline-style",
    name: "InlineStyleView",
    component: InlineStyleView,
  },
  {
    path: "/internal-style",
    name: "InternalStyleView",
    component: InternalStyleView,
  },
  {
    path: "/external-style",
    name: "ExternalStyleView",
    component: ExternalStyleView,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;

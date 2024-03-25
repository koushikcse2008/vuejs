import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/setup',
    name: 'Setup',
    component: function () {
      return import('../views/Setup.vue')
    }
  },
  {
    path: '/template-syntax',
    name: 'TemplateSyntax',
    component: function () {
      return import('../views/TemplateSyntax.vue')
    }
  },
  {
    path: '/computed-properties',
    name: 'ComputedProperties',
    component: function () {
      return import('../views/ComputedProperties.vue')
    }
  },
  {
    path: '/style-bindings',
    name: 'StyleBindings',
    component: function () {
      return import('../views/StyleBindings.vue')
    }
  },
  {
    path: '/class-bindings',
    name: 'ClassBindings',
    component: function () {
      return import('../views/ClassBindings.vue')
    }
  },
  {
    path: '/conditional-rendering',
    name: 'ConditionalRendering',
    component: function () {
      return import('../views/ConditionalRendering.vue')
    }
  },
  {
    path: '/template-syntax',
    name: 'TemplateSyntax',
    component: function () {
      return import('../views/TemplateSyntax.vue')
    }
  },
  {
    path: '/list-rendering',
    name: 'ListRendering',
    component: function () {
      return import('../views/ListRendering.vue')
    }
  },
  {
    path: '/event-handling',
    name: 'EventHandling',
    component: function () {
      return import('../views/EventHandling.vue')
    }
  },
  {
    path: '/form-input-binding',
    name: 'form-input-binding',
    component: function () {
      return import('../views/FormInputBinding.vue')
    }
  },
  {
    path: '/lifecycle-hooks',
    name: 'LifecycleHooks',
    component: function () {
      return import('../views/LifecycleHooks.vue')
    }
  },
  {
    path: '/watchers',
    name: 'Watchers',
    component: function () {
      return import('../views/Watchers.vue')
    }
  },
  {
    path: '/template-refs',
    name: 'TemplateRefs',
    component: function () {
      return import('../views/TemplateRefs.vue')
    }
  },
  {
    path: '/component-basics',
    name: 'ComponentBasics',
    component: function () {
      return import('../views/ComponentBasics.vue')
    }
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router

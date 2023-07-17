import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
<<<<<<< HEAD
<<<<<<< HEAD
import store from '../store/index'
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/',
      redirect: {
        name: 'home'
      }
    },
    {
      path: '/categories',
      name: 'categories',
      component: () => import('../views/Categories.vue')
    },
    {
      path: '/books',
      name: 'books',
      component: () => import('../views/Books.vue')
    },
<<<<<<< HEAD
<<<<<<< HEAD
    {
      path: '/category/:slug',
      name: 'category',
      component: () => import('../views/Category.vue')
    },
    {
      path: '/book/:slug',
      name: 'book',
      component: () => import('../views/Book.vue')
    },
    {
      path: '/checkout',
      name: 'checkout',
      component: () => import('../views/Checkout.vue'),
      meta: { auth: true }
    },
  ]
})
router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.auth)) {
    if(store.getters['auth/guest']) {
      store.dispatch('alert/set', {
        status: true,
        text: 'Login First',
        color: 'error',
      })
      store.dispatch('setPrevUrl', to.path)

      store.dispatch('dialog/setComponent', 'login')
    } else {
      next()
    }
  } else {
    next()
  }
})
=======
  ]
})
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
  ]
})
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

export default router

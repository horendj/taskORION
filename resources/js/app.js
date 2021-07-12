require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/Home'
import App from './components/App'
import People from './components/people/People'
import ShowPerson from './components/people/ShowPerson'
//Vue.component('app', require('./components/App').default)
Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/people',
      name: 'people',
      component: People,
      props: true
    },
    {
      path: '/people/:personName',
      name: 'showPerson',
      component: ShowPerson,
      props: true
    }
  ]
})

const app = new Vue({
  el: '#app',
  components: {App},
  router
})

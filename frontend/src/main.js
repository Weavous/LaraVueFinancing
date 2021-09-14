import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from '../src/routes.js';

import Empty from './components/Empty.vue';

Vue.use(VueRouter);

new Vue({
  el: '#app',
  router: routes,
  render: h => h(Empty)
})

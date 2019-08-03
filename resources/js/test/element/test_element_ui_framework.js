require('../../bootstrap');

//window.Vue = require('vue');

import Vue from 'vue';

import App from './TestElementUI.vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

const app = new Vue({
  el: '#app',
  render: h => h(App),
});

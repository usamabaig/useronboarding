require('../../bootstrap');

//window.Vue = require('vue');

import Vue from 'vue';

import App from './TestIViewElementUI.vue';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
import locale from 'iview/dist/locale/en-US';
Vue.use(iView, { locale });

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

const app = new Vue({
  el: '#app',
  render: h => h(App),
});

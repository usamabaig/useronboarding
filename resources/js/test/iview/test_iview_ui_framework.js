require('../../bootstrap');

//window.Vue = require('vue');

import Vue from 'vue';

import App from './TestIViewUI.vue';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
import locale from 'iview/dist/locale/en-US';
Vue.use(iView, { locale });

const app = new Vue({
  el: '#app',
  render: h => h(App),
});

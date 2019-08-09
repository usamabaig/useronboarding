import Vue from 'vue';
require("./bootstrap");

window.Vue = require("vue");

import router from './router.js';
Vue.router = router;
new Vue({
    el: "#app",
    router
});

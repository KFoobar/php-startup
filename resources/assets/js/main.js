// jQuery and Bootstrap
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {
    // Error
}

// Axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Vue
window.Vue = require('vue');
Vue.component('demo', require('./vue/demo.vue'));

const app = new Vue({
    el: '#application'
});

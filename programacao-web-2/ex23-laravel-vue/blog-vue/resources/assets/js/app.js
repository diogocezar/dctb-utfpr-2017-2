require('./bootstrap');
window.Vue  = require('vue');

import CompFooter from './components/CompFooter.vue';

Vue.config.ignoredElements = ['comp-posts'];

const vueApp = new Vue({
    el: '#vue-app',
    components: { CompFooter }
});
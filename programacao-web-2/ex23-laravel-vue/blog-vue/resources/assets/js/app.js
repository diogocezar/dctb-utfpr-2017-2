require('./bootstrap');
window.Vue  = require('vue');

import Posts from './components/Posts.vue';

const app = new Vue({
    el: '#app',
    components: { Posts }
});
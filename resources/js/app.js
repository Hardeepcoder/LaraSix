
require('./bootstrap');

window.Vue = require('vue');

Vue.component('add-post', require('./components/addPost.vue').default);


const app = new Vue({
    el: '#app',
});

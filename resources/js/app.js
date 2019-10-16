
require('./bootstrap');
window.Vue = require('vue');

Vue.component('add-post', require('./components/addPost.vue').default);
Vue.component('all-posts', require('./components/allPosts.vue').default);
Vue.component('page-number', require('laravel-vue-pagination'));

import Vuelidate from 'vuelidate'
import Axios from 'axios';
Vue.use(Vuelidate)

const app = new Vue({
    el: '#app',
    data:{
        news:[],
    },
    created(){
        this.allposts()
    },

    methods:{
        allposts(page){
            Axios.get('http://localhost:8888/larasix/allposts?page=' + page).then(res=>{
             this.news = res.data
            });
        }
    }
   
});

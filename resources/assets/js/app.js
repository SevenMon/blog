
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import $ from "jquery";
import top from '../../components/top/top.vue';

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    created(){

    },
    data:{

    },
    computed:{

    },
    methods:{
        top(){
            $('html').animate({
                    scrollTop: 0
                },
                200);
            return false;
        }
    },
    components: {
        top,
    },
});

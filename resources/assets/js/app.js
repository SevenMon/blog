
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import $ from "jquery";
import top from '../../components/top/top.vue';
import sideBar from '../../components/sideBar/sideBar.vue';

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
        showside:0
    },
    computed:{

    },
    watch:{
        showside(newQuestion, oldQuestion){
            if(newQuestion == 1 && oldQuestion == 0){
                $(".main-body").css("padding-right", "320px");
                $(".side").css("width", "320px");
            }else {
                $(".main-body").css("padding-right", "0px");
                $(".side").css("width", "0px");
            }
            //console.log(newQuestion+'==='+oldQuestion);
        }
    },
    methods:{
        updateside(){
            this.showside = this.showside == 0 ? 1 : 0;
            console.log(this.showside);
        }
    },
    components: {
        top,sideBar
    },
});

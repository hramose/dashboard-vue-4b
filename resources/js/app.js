
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Bootstrap 4 & Vuejs
 */
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//EventBus
import { EventBus } from './components/EventBus.js';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('title-component', require('./components/TitleExampleComponent.vue'));
//Dashboard
Vue.component('sidebar-component', require('./components/dashboard/Sidebar.vue'));
Vue.component('navbar-component', require('./components/dashboard/Navbar.vue'));
//Home
Vue.component('home-component', require('./components/home/Home.vue'));

const app = new Vue({
    el: '#app',
    data: {
        menu: false,
        titulo: 'Dashboard'
    },
    methods: {
        changeView() {
            console.log("Change from Sidebar");
        }
    },
    mounted() {
        EventBus.$on('showMenu', data => {
            this.menu = !this.menu;
        });
    }
});

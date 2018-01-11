import './bootstrap';
import Vue from 'vue'; // Importing Vue Library
import VueRouter from 'vue-router'; // importing Vue router library
import VueCarousel from 'vue-carousel';
import router from './routes';
import SideBar from './components/SideBar';

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueCarousel);

Vue.component('my-menu', SideBar);
const app = new Vue({
    el: '#app',
    router
});
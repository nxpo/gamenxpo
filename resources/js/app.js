/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import BootstrapVue from 'bootstrap-vue' //Importing
import Vue from 'vue';
import SvgVue from 'svg-vue';
import flipbook from 'flipbook-vue';


import onlyInt from 'vue-input-only-number';
import VueFakeInput from 'vue-fake-input';

Vue.use(VueFakeInput);
Vue.use(BootstrapVue) // Telling Vue to use this in whole application
Vue.component('test1-component', require('./components/test1.vue').default);
Vue.component('test2-component', require('./components/test2.vue').default);
Vue.component('test3-component', require('./components/test3.vue').default);

Vue.component('book-component', require('../book/book.vue').default);
// Vue.component('VueStar', require('../book/book.vue').default);

Vue.component('flipbook', require('flipbook-vue').default);
Vue.use(onlyInt);

Vue.use(flipbook);  
Vue.use(SvgVue);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        
     }
});



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('cirrhose-editor', require('./components/Editor.vue'));
Vue.component('cirrhose-search-button', require('./components/Search-Button.vue'));
Vue.component('cirrhose-search', require('./components/Search.vue'));

const app = new Vue({
    el: '#app',
    data: {
        mobileMenu: false
    },
    methods: {
        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu;
        }
    }

});

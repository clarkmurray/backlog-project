
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

window.Vue = require('vue');

import InstantSearch from 'vue-instantsearch';


Vue.use(InstantSearch);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('algolia-instantsearch', require('./components/InstantSearch.vue'));
Vue.component('reading-test', require('./components/ReadingTest.vue'));
Vue.component('api-search', require('./components/APISearch.vue'));
Vue.component('search-book', require('./components/APIBook.vue'));
Vue.component('search-movie', require('./components/APIMovie.vue'));
Vue.component('books-backlog', require('./components/BooksBacklog.vue'));

const app = new Vue({
    el: '#app'
});
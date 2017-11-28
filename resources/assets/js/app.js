
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

window.Vue = require('vue');

import InstantSearch from 'vue-instantsearch';

import createFromAlgoliaCredentials from 'vue-instantsearch';

Vue.use(InstantSearch);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	searchStore: null
    }
});

const searchStore = createFromAlgoliaCredentials('VDG2ASZRC8', '7ae089c05742521cd481e6190a45e5ee');

export default {
  data() {
    return { searchStore };
  }
}

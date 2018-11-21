
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*const app = new Vue({
    el: '#app'
});*/

const app = new Vue({
    el: "#vue-crud-wrapper",
    data: {
        items: [],
        hasError: true,
        newItem: { 'name': '','age': '','profession': '' },
    },
    methods: {
        createItem: function createItem() {
            var _this = this;
            var input = this.newItem;

            if (input['name'] == '' || input['age'] == '' || input['profession'] == '' ) {
                this.hasError = false;
            } else {
                this.hasError = true;
                axios.post('/vueitems', input).then(function (response) {
                    _this.newItem = { 'name': '' };
                    _this.getVueItems();
                });
            }
        },

        mounted: function mounted() {
            this.getVueItems();
        },

        getVueItems: function getVueItems() {
            var _this = this;

            axios.get('/vueitems').then(function (response) {
                _this.items = response.data;
            });
        }
    },

});

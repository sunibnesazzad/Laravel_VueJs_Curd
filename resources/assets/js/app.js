
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
    mounted: function mounted() {
        this.getItems();
    },

    methods: {
        createItem: function createItem() {
            var input = this.newItem;
            var _this = this;
            console.log(input);
            console.log(this.hasError);
            if (input['name']=='' || input['age']=='' || input['profession']==''){
                this.hasError = false;
                console.log(this.hasError);
            }else {
                this.hasError = true;
                axios.post('/storeItem', input).then(function (response) {
                    _this.newItem = { 'name': '','age': '','profession': '' };
                    _this.getItems();
                });
            }

        },

        getItems: function getItems() {
            var _this = this;

            axios.get('/getItems').then(function (response) {
                _this.items = response.data;
            });
        }
    },

    });

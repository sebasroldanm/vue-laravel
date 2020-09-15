require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('idea', require('./components/Idea.vue').default);

const app = new Vue({
    el: '#app',
});

require('./bootstrap');

import Vue from 'vue'

window.Vue = Vue //this is important! Do not use require('vue') for livewire-vue

// Register Vue components
Vue.component('fields-form', require('./components/FieldsForm.vue').default);
Vue.component('resource-data-form', require('./components/ResourceDataForm.vue').default);
Vue.component('main-view', require('./components/main.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
    data:{
        logo:'/assets/img/nep-gov-logo',
    }
});
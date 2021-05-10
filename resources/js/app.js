require('./bootstrap');

import * as Vue from 'vue';
import HeaderComponent from "./components/HeaderComponent";

// Create a Vue application
const app = Vue.createApp({})

app.component('header-component', HeaderComponent);

app.mount('#app')





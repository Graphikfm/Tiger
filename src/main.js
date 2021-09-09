import { createApp } from 'vue';
// import * as Vue from 'vue'; // in Vue 3
import axios from 'axios';
import VueAxios from 'vue-axios';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import App from './App.vue';
import router from './router';
import store from './store';
import './assets/tailwind.css';

library.add(fas, fab);

createApp(App)
  .use(VueAxios, axios)
  .use(store)
  .use(router)
  .component('fa', FontAwesomeIcon)
  .mount('#app');

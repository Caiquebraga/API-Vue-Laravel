import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import { createApp } from 'vue';
import App from './App.vue';
import router from './routes/index';
import axios from 'axios';
import '@fortawesome/fontawesome-free/css/all.css';


const app = createApp(App);
app.config.globalProperties.$axios = axios;

app.use(router);
app.mount('#app');

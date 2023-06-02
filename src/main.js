import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import { createApp } from 'vue';
import App from './App.vue';
import router from './routes/index'; // Importe o arquivo de rotas corretamente

createApp(App).use(router).mount('#app');

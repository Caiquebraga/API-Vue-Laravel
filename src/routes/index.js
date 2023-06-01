import { createRouter, createWebHashHistory } from "vue-router";
import ProductsView from '../views/ProductsView.vue'
import HomeView from '../views/HomeView.vue'
import PainelView from '../views/PainelView.vue'

const routes = [
  { home: '/', component: HomeView },
  { path: '/products', component: ProductsView },
  { path: '/painel', component: PainelView },
];

const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes,
});

export default router;

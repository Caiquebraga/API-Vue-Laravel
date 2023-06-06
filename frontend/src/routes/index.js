import { createRouter, createWebHashHistory } from "vue-router";
import HomeView from '../views/HomeView.vue'
import ProductsView from '../views/ProductsView.vue'
import PainelView from '../views/PainelView.vue'

const routes = [
  { path: '/', component: HomeView },
  { path: '/products', component: ProductsView },
  { path: '/painel', component: PainelView },
];

const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes,
});

export default router;

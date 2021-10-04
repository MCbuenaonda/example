window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import ListCompanies from '../components/ListCompaniesComponent.vue'
import ListProducts from '../components/ListProductsComponent.vue'
import DetailProduct from '../components/DetailProductComponent.vue'

const router = new VueRouter({
    mode: 'history',
    routes:[
        {path: '/', component: ListProducts, name: 'home'},
        {path: '/list-companies', component: ListCompanies, name: 'list-companies'},
        {path: '/product-detail/:id', component: DetailProduct, name: 'product-detail'},
    ]
});

Vue.use(VueRouter);

export default router;

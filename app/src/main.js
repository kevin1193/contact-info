import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

const routes = [
    {
        name: 'all_products',
        path: '/',
        component: AllProducts
    },
    {
        name: 'create_product',
        path: '/products/create',
        component: CreateProduct
    },
    {
        name: 'edit_product',
        path: '/products/edit/:id',
        component: EditProduct
    },
    {
        name: 'delete_product',
        path: '/products/delete/:id',
        component: DeleteProduct
    }
];
var router = new VueRouter({ routes: routes, mode: 'history' });
new Vue(Vue.util.extend({ router }, App)).$mount('#app');

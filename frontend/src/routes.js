import VueRouter from 'vue-router';

import Brand from '../src/pages/Brand.vue';
import Financing from '../src/pages/Financing.vue';
import Type from '../src/pages/Type.vue';
import Vehicle from '../src/pages/Vehicle.vue';

export default new VueRouter({
    mode: "history",
    routes: [
        { path: "/", component: Financing },
        { path: "/brands", component: Brand },
        { path: "/financing", component: Financing },
        { path: "/types", component: Type },
        { path: "/vehicles", component: Vehicle }
    ]
});
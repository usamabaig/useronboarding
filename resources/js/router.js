import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import SignUp from './components/signup/signup';
import ContactForm from './components/contact_form/ContactForm';

const routes = [
    {
        path: '/contact',
        component: ContactForm,
        redirect: '/contact',
        children: [
            // ---------- dashboard routes
            {
                path: '/login',
                component: SignUp,
                name: 'Login',
                meta: {
                    breadcrumb: 'SignUp'
                }
            }
        ]
    },

    // ---------- 404 route
    // {
    //     path: "/404",
    //     alias: "*",
    //     component: NotFound
    // }
];

const router = new VueRouter({
    routes,
});

export default router;

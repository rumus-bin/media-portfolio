import './bootstrap';
import '../css/app.css';

import {createApp} from 'vue';
import App from './Components/App.vue';

// AdminDashboard section start here
import AdminDashboard from "@/Components/AdminDashboardApp.vue";
import "@fortawesome/fontawesome-free/css/all.min.css";
import {createRouter, createWebHistory} from "vue-router";

// layouts
import Admin from "./Layouts/AdminDashboard/Admin.vue";
import Auth from "./Layouts/AdminDashboard/Auth.vue";

// views for Admin layout
import Dashboard from "@/Views/admin/Dashboard.vue";
import Settings from "@/Views/admin/Settings.vue";
import Tables from "@/Views/admin/Tables.vue";
import Maps from "@/Views/admin/Maps.vue";

// views for Auth layout
import Login from "@/Views/auth/Login.vue";
import Register from "@/Views/auth/Register.vue";

// views without layouts
import Landing from "@/Views/Landing.vue";
import Profile from "@/Views/Profile.vue";
import Index from "@/Views/Index.vue";


// routes

const routes = [
    {
        path: "/admin",
        redirect: "/admin/dashboard",
        component: Admin,
        children: [
            {
                path: "/admin/dashboard",
                component: Dashboard,
            },
            {
                path: "/admin/settings",
                component: Settings,
            },
            {
                path: "/admin/tables",
                component: Tables,
            },
            {
                path: "/admin/maps",
                component: Maps,
            },
        ],
    },
    {
        path: "/auth",
        redirect: "/auth/login",
        component: Auth,
        children: [
            {
                path: "/auth/login",
                component: Login,
            },
            {
                path: "/auth/register",
                component: Register,
            },
        ],
    },
    {
        path: "/landing",
        component: Landing,
    },
    {
        path: "/profile",
        component: Profile,
    },
    {
        path: "/",
        component: Index,
    },
    {path: "/:pathMatch(.*)*", redirect: "/"},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// AdminDashboard section end here

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Acquire Test Task';
const appRoot = window.document.getElementById('#app');
createApp(App).mount('#app');
createApp(AdminDashboard).use(router).mount("#admin_dashboard_app");

// createApp(PokemonIndex).mount('#aciquire_pokemon_app');

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
//     setup({ el, app, props, plugin }) {
//         return createApp({ render: () => h(app, props) })
//             .use(plugin)
//             .use(ZiggyVue, Ziggy)
//             .mount(el);
//     },
// });
//
// InertiaProgress.init({ color: '#4B5563' });

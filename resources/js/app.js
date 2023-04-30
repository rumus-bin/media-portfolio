import './bootstrap';
import '../css/app.css';

import {createApp} from 'vue';
import App from './Components/App.vue';
import Home from './Pages/Home.vue';

// import PokemonIndex from "@/Components/PokemonIndex.vue";
// import router from "@/router";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Acquire Test Task';
const appRoot = window.document.getElementById('#app');
createApp(App).mount('#app');
createApp(Home).mount('#home');
// createApp(PokemonIndex).mount('#aciquire_pokemon_app');

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
//     setup({el, app, props, plugin}) {
//         return createApp({render: () => h(app, props)})
//             .use(plugin)
//             .use(ZiggyVue, Ziggy)
//             .mount(el);
//     },
// });
//
// InertiaProgress.init({ color: '#4B5563' });

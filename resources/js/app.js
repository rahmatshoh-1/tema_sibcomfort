import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Link } from '@inertiajs/vue3'
import CKEditor from '@ckeditor/ckeditor5-vue';
import VueTilt from 'vue3-tilt'

const appName = import.meta.env.VITE_APP_NAME || 'Сибкомфорт';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(CKEditor)
            .use(VueTilt)
            .component('Link', Link)
            .mount(el);
    },
    progress: {
        color: '#16A34A', //#4B5563
    },
});

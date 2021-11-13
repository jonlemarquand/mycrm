import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import Layout from './Shared/Layout'
import { Link } from '@inertiajs/inertia-vue3';

createInertiaApp({
    resolve: name =>
    {
        let page = require(`./Pages/${name}`).default;

        page.layout = Layout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .mount(el)
    },
})

import { createInertiaApp } from '@inertiajs/vue3';
import Aura from '@primeuix/themes/aura';
import PrimeVue from 'primevue/config';

createInertiaApp({
    withApp(app) {
        app.use(PrimeVue, {
            theme: {
                preset: Aura,
            },
            ripple: true,
        });
    },
});
